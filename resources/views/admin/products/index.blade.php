@extends('layouts.admin')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Products</h2>
        <button onclick="openModal('Create Product')" class="bg-pink-500 text-white px-4 py-2 rounded">Add Product</button>
    </div>

    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 border">ID</th>
                <th class="px-4 py-2 border">Name</th>
                <th class="px-4 py-2 border">Price</th>
                <th class="px-4 py-2 border">Category</th>
                <th class="px-4 py-2 border">Stock</th>
                <th class="px-4 py-2 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr class="hover:bg-gray-100">
                <td class="px-4 py-2 border">{{ $product->id }}</td>
                <td class="px-4 py-2 border">{{ $product->name }}</td>
                <td class="px-4 py-2 border">{{ number_format($product->price, 2) }} RON</td>
                <td class="px-4 py-2 border">{{ $product->category }}</td>
                <td class="px-4 py-2 border">{{ $product->stock }}</td>
                <td class="px-4 py-2 border text-center">
                    <div class="flex justify-center space-x-2">
                        <button onclick="openModal('Edit Product', {{ $product }})" class="bg-yellow-500 text-white px-2 py-1 rounded">
                            Edit
                        </button>
                        <button onclick="confirmDelete({{ $product->id }})" class="bg-red-500 text-white px-2 py-1 rounded">
                            Delete
                        </button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('admin.products.partials.modal')
@include('admin.products.partials.delete-modal')

@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const modal = document.getElementById("productModal");
        const deleteModal = document.getElementById("deleteModal");

        // Close modals when clicking outside
        [modal, deleteModal].forEach(modalEl => {
            modalEl.addEventListener("click", function(event) {
                if (event.target === modalEl) {
                    closeModal();
                }
            });
        });
    });

    function openModal(title = "Create Product", product = null) {
        const modal = document.getElementById("productModal");
        document.getElementById("modalTitle").innerText = title;

        document.getElementById("productForm").reset();
        document.getElementById("formMethod").value = product ? "PUT" : "POST";
        document.getElementById("productId").value = product ? product.id : "";
        document.getElementById("productName").value = product ? product.name : "";
        document.getElementById("productPrice").value = product ? product.price : "";
        document.getElementById("productCategory").value = product ? product.category : "";
        document.getElementById("productStock").value = product ? product.stock : "";
        document.getElementById("productDescription").value = product ? product.description : "";

        modal.classList.remove("hidden");
    }

    function closeModal() {
        document.getElementById("productModal").classList.add("hidden");
        document.getElementById("deleteModal").classList.add("hidden");
    }

    function confirmDelete(productId) {
        const deleteModal = document.getElementById("deleteModal");
        const deleteForm = document.getElementById("deleteForm");

        deleteForm.action = `/admin/products/${productId}`;
        deleteModal.classList.remove("hidden");
    }
</script>
@endsection