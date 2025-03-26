@extends('layouts.app')

@section('content')
<section class="products" id="products">
    <h1 class="heading"> <span> shop </span> </h1>
    <div class="box-container">
        @foreach ($products as $product)
        <div class="box cursor-pointer" onclick='openProductModal(@json($product))'>
            <span class="discount z-10"> -{{ rand(5, 25) }}% </span>
            <div class="image">
                <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}">
            </div>
            <div class="content">
                <h3>{{ $product->name }}</h3>
                <div class="price">{{ $product->price }} RON <span>{{ $product->price * 1.2 }} RON</span></div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@include('pages.shop.partials.product-modal')

@endsection

@section('scripts')
<script>
    function openProductModal(product) {
        document.getElementById("modalTitle").innerText = product.name;
        document.getElementById("modalDescription").innerText = product.description;
        document.getElementById("modalPrice").innerText = product.price + " RON";

        const baseUrl = "{{ asset('') }}";
        document.getElementById("modalImage").src = product.image_path.startsWith('http') ? product.image_path : baseUrl + product.image_path;

        const addToCartButton = document.getElementById("addToCart");
        addToCartButton.dataset.product = JSON.stringify({
            id: product.id,
            name: product.name,
            price: product.price,
            image: product.image_path.startsWith('http') ? product.image_path : baseUrl + product.image_path,
            quantity: 1
        });

        document.getElementById("productModal").classList.remove("hidden");
    }

    function closeModal(event) {
        if (event.target.id === "productModal") {
            document.getElementById("productModal").classList.add("hidden");
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("addToCart").addEventListener("click", function() {
            const product = JSON.parse(this.dataset.product);

            let cart = JSON.parse(localStorage.getItem("cart")) || [];

            let existingProduct = cart.find(item => item.id === product.id);
            if (existingProduct) {
                existingProduct.quantity += 1;
            } else {
                cart.push(product);
            }

            localStorage.setItem("cart", JSON.stringify(cart));

            alert("Product added to cart!");
            window.location.reload()
        });
    });
</script>
@endsection