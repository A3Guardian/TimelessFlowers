<div id="productModal" class="fixed z-50 inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden" onclick="closeModal(event)">
    <div class="bg-white p-8 rounded-lg shadow-lg w-2/3 max-h-[80vh] flex relative" onclick="event.stopPropagation();">

        <!-- Left Side: Product Details -->
        <div class="w-1/2 p-6 flex flex-col justify-between">
            <div>
                <h2 id="modalTitle" class="text-3xl font-bold mb-4">Product Name</h2>
                <p id="modalDescription" class="text-lg mb-4">Product description...</p>
                <h3 id="modalPrice" class="text-2xl font-bold text-red-600 mb-6">Price</h3>
            </div>
            <button id="addToCart" class="bg-green-600 text-white text-lg px-6 py-3 rounded-lg hover:bg-green-700 transition">
                Add to Cart
            </button>
        </div>

        <!-- Right Side: Product Image -->
        <div class="w-1/2 flex justify-center items-center">
            <img id="modalImage" src="" alt="Product Image" class="max-h-[300px] max-w-full object-cover rounded-lg shadow">
        </div>

    </div>
</div>