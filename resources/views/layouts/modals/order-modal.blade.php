<div id="orderModal" class="z-50 fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white p-8 rounded-lg shadow-lg w-2/3 max-h-[80vh]">
        <h2 class="text-2xl font-bold mb-6">Confirm Your Order</h2>

        <!-- Order Items List -->
        <div id="orderSummary" class="mb-4 space-y-3 overflow-y-auto max-h-72 p-3 border rounded text-lg"></div>

        <p class="font-semibold text-xl mb-4">Total: <span id="orderTotal">0</span> RON</p>

        <!-- User Details Form -->
        <input type="email" id="email" placeholder="Email" class="w-full mb-3 p-3 border rounded text-lg">
        <input type="text" id="phone" placeholder="Phone" class="w-full mb-3 p-3 border rounded text-lg">
        <input type="text" id="address" placeholder="Address" class="w-full mb-3 p-3 border rounded text-lg">
        <textarea id="details" placeholder="Additional details (optional)" class="w-full mb-3 p-3 border rounded text-lg"></textarea>

        <div class="flex justify-between mt-6">
            <button onclick="toggleOrderModal()" class="px-5 py-3 bg-gray-500 text-white rounded text-lg">Cancel</button>
            <button onclick="submitOrder()" class="px-5 py-3 bg-green-600 text-white rounded text-lg hover:bg-green-700 transition">
                Place Order
            </button>
        </div>
    </div>
</div>