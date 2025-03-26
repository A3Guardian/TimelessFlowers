@extends('layouts.admin')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Orders</h2>
        <button onclick="openCreateOrderModal()" class="bg-green-500 text-white px-4 py-2 rounded">Add Order</button>
    </div>

    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 border">ID</th>
                <th class="px-4 py-2 border">Customer</th>
                <th class="px-4 py-2 border">Total</th>
                <th class="px-4 py-2 border">Status</th>
                <th class="px-4 py-2 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr class="hover:bg-gray-100">
                <td class="px-4 py-2 border">{{ $order->id }}</td>
                <td class="px-4 py-2 border">{{ $order->email }}</td>
                <td class="px-4 py-2 border">{{ $order->total_price }} RON</td>
                <td class="px-4 py-2 border">{{ ucfirst($order->status) }}</td>
                <td class="px-4 py-2 border text-center">
                    <div class="flex justify-center space-x-2">
                        <button onclick="viewOrder({{ $order->id }})" class="bg-blue-500 text-white px-2 py-1 rounded">
                            View
                        </button>
                        <button onclick="editOrder({{ $order->id }})" class="bg-yellow-500 text-white px-2 py-1 rounded">
                            Edit
                        </button>
                        <button onclick="confirmDelete({{ $order->id }})" class="bg-red-500 text-white px-2 py-1 rounded">
                            Delete
                        </button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('admin.orders.partials.view-modal')
@include('admin.orders.partials.edit-modal')
@include('admin.orders.partials.delete-modal')
@include('admin.orders.partials.create-modal')

@endsection

@section('scripts')
<script>
    function openCreateOrderModal() {
        document.getElementById("createOrderModal").classList.remove("hidden");
    }

    function viewOrder(orderId) {
        fetch(`/admin/orders/${orderId}`)
            .then(response => response.json())
            .then(order => {
                document.getElementById("orderDetails").innerHTML = `
                <p><strong>ID:</strong> ${order.id}</p>
                <p><strong>Email:</strong> ${order.email}</p>
                <p><strong>Phone:</strong> ${order.phone}</p>
                <p><strong>Address:</strong> ${order.address}</p>
                <p><strong>Total:</strong> ${order.total_price} RON</p>
                <p><strong>Status:</strong> ${order.status}</p>
                <p><strong>Details:</strong> ${order.details}</p>
            `;
                document.getElementById("viewModal").classList.remove("hidden");
            });
    }

    function editOrder(orderId) {
        document.getElementById("editOrderId").value = orderId;
        document.getElementById("editOrderForm").action = `/admin/orders/${orderId}`;
        document.getElementById("editModal").classList.remove("hidden");
    }


    function confirmDelete(orderId) {
        document.getElementById("deleteOrderId").value = orderId;
        document.getElementById("deleteOrderForm").action = `/admin/orders/${orderId}`;
        document.getElementById("deleteModal").classList.remove("hidden");
    }


    function closeModal() {
        document.querySelectorAll(".modal").forEach(modal => modal.classList.add("hidden"));
    }

    document.addEventListener("DOMContentLoaded", function() {
        const totalPriceInput = document.getElementById("totalPrice");
        const cartInput = document.getElementById("cartInput");

        function updateCart() {
            let selectedProducts = [];
            let totalPrice = 0;

            document.querySelectorAll(".productQuantity").forEach(input => {
                let quantity = parseInt(input.value);
                if (quantity > 0) {
                    let product = {
                        id: input.getAttribute("data-id"),
                        name: input.parentElement.querySelector("label").innerText.split(" (")[0],
                        price: parseFloat(input.getAttribute("data-price")),
                        quantity: quantity
                    };
                    selectedProducts.push(product);
                    totalPrice += product.price * quantity;
                }
            });

            cartInput.value = JSON.stringify(selectedProducts);
            totalPriceInput.value = totalPrice;
        }

        function submitOrder() {
            let cart = JSON.parse(localStorage.getItem("cart")) || [];
            let email = document.getElementById("email").value.trim();
            let phone = document.getElementById("phone").value.trim();
            let address = document.getElementById("address").value.trim();
            let details = document.getElementById("details") ? document.getElementById("details").value.trim() : "";
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
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    alert("Order placed successfully! Our team will contact you!");
                    window.location.reload();
                })
                .catch(error => {
                    console.error("Error:", error);
                    alert("Failed to place order. Please try again.");
                });
        }


        document.querySelectorAll(".productQuantity").forEach(input => {
            input.addEventListener("input", updateCart);
        });
    });
</script>
@endsection