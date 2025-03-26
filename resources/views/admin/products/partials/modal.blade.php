<div id="productModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 id="modalTitle" class="text-xl font-bold mb-4">Create Product</h2>
        <form id="productForm" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" id="formMethod" value="POST">
            <input type="hidden" name="id" id="productId">

            <label>Name</label>
            <input type="text" name="name" id="productName" class="w-full border p-2 rounded mb-2" required>

            <label>Price</label>
            <input type="number" name="price" id="productPrice" class="w-full border p-2 rounded mb-2" required>

            <label>Category</label>
            <input type="text" name="category" id="productCategory" class="w-full border p-2 rounded mb-2" required>

            <label>Stock</label>
            <input type="number" name="stock" id="productStock" class="w-full border p-2 rounded mb-2" required>

            <label>Description</label>
            <textarea name="description" id="productDescription" class="w-full border p-2 rounded mb-2"></textarea>

            <label>Image</label>
            <input type="file" name="image" class="w-full border p-2 rounded mb-2">

            <div class="flex justify-end space-x-2 mt-4">
                <button type="button" onclick="closeModal()" class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
                <button type="submit" class="bg-pink-500 text-white px-4 py-2 rounded">Save</button>
            </div>
        </form>
    </div>
</div>