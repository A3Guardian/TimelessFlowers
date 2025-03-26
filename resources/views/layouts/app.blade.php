<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/home.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.partials.navigation')
        @include('layouts.modals.cart')
        @include('layouts.modals.order-modal')

        <!-- Page Heading -->
        @isset($header)
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endisset

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>
    <script>
        function toggleCartDrawer() {
            document.getElementById("cartDrawer").classList.toggle("translate-x-full");
        }

        function updateCartUI() {
            const cartItemsContainer = document.getElementById("cartItems");
            cartItemsContainer.innerHTML = "";

            let cart = JSON.parse(localStorage.getItem("cart")) || [];

            if (cart.length === 0) {
                cartItemsContainer.innerHTML = "<p class='text-gray-500 text-center'>Your cart is empty.</p>";
                return;
            }

            cart.forEach((item, index) => {
                item.total = item.price * item.quantity; // Ensure correct total price

                let cartItem = document.createElement("div");
                cartItem.className = "flex items-center justify-between p-2 border rounded-lg";

                cartItem.innerHTML = `
                <img src="${item.image}" class="w-16 h-16 object-cover rounded-md" alt="${item.name}">
                <div class="flex-1 ml-4">
                    <h3 class="text-lg font-bold">${item.name}</h3>
                    <p class="text-gray-600">${item.price} RON x ${item.quantity} = <strong>${item.total} RON</strong></p>
                </div>
                <input type="number" min="1" value="${item.quantity}" class="w-16 p-1 border rounded text-center"
                    onchange="updateQuantity(${index}, this.value)">
                <button onclick="removeFromCart(${index})" class="text-red-500 text-xl hover:text-red-700">&times;</button>
            `;

                cartItemsContainer.appendChild(cartItem);
            });

            localStorage.setItem("cart", JSON.stringify(cart));
        }

        function updateQuantity(index, newQuantity) {
            let cart = JSON.parse(localStorage.getItem("cart")) || [];
            newQuantity = parseInt(newQuantity);
            if (newQuantity < 1) return;

            cart[index].quantity = newQuantity;
            cart[index].total = cart[index].price * newQuantity;
            localStorage.setItem("cart", JSON.stringify(cart));
            updateCartUI();
        }

        function removeFromCart(index) {
            let cart = JSON.parse(localStorage.getItem("cart")) || [];
            cart.splice(index, 1);
            localStorage.setItem("cart", JSON.stringify(cart));
            updateCartUI();
        }

        function toggleOrderModal() {
            let cart = JSON.parse(localStorage.getItem("cart")) || [];

            if (cart && cart.length === 0) {
                alert("Your cart is empty.");
                return;
            }
            toggleCartDrawer()
            placeOrder();
            document.getElementById("orderModal").classList.toggle("hidden");
        }

        function placeOrder() {
            let cart = JSON.parse(localStorage.getItem("cart")) || [];


            let totalPrice = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            let summaryHtml = cart.map(item => `
            <div class="flex items-center justify-between p-2 border-b">
                <img src="${item.image}" class="w-16 h-16 object-cover rounded-md" alt="${item.name}">
                <div class="flex-1 ml-2">
                    <p class="font-medium">${item.name}</p>
                    <p class="text-sm">${item.quantity} x ${item.price} RON</p>
                </div>
                <p class="font-bold">${item.quantity * item.price} RON</p>
            </div>
        `).join("");

            document.getElementById("orderSummary").innerHTML = summaryHtml;
            document.getElementById("orderTotal").innerText = totalPrice;
        }

        function submitOrder() {
            let cart = JSON.parse(localStorage.getItem("cart")) || [];
            let email = document.getElementById("email").value;
            let phone = document.getElementById("phone").value;
            let address = document.getElementById("address").value;
            let details = document.getElementById("details").value;
            let totalPrice = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);

            if (!email || !phone || !address) {
                alert("Please fill in all required fields.");
                return;
            }

            fetch("/orders", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        email,
                        phone,
                        address,
                        cart,
                        total_price: totalPrice,
                        details
                    })
                })
                .then(response => response.json())
                .then(data => {
                    alert("Order placed successfully! Our team will contact you!");
                    localStorage.removeItem("cart");
                    updateCartUI();
                    toggleOrderModal();
                })
                .catch(error => console.error("Error:", error));
        }

        document.addEventListener("DOMContentLoaded", updateCartUI);
    </script>


    @yield('scripts')


</body>

</html>