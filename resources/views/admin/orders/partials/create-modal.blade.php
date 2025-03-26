<div id="createOrderModal" class="modal fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden z-50">
    <div class="bg-white p-6 rounded-lg shadow-xl w-full max-w-md sm:max-w-lg md:max-w-xl max-h-[60vh] overflow-y-auto">
        <h2 class="text-2xl font-bold mb-4 text-gray-800">Create Order</h2>

        <form id="createOrderForm" onsubmit="event.preventDefault(); submitOrder();">
            @csrf

            <!-- Product Selection with Scroll -->
            <label class="block font-semibold text-gray-700">Select Products:</label>
            <div class="max-h-32 overflow-y-auto border border-gray-300 rounded p-2 mb-2">
                @foreach ($products as $product)
                <div class="flex justify-between items-center mb-2">
                    <label class="w-1/2 text-gray-800">{{ $product->name }} ({{ $product->price }} RON)</label>
                    <input type="number" min="0" data-price="{{ $product->price }}" data-id="{{ $product->id }}"
                        class="productQuantity w-1/4 p-1 border border-gray-300 rounded focus:ring focus:ring-green-300"
                        value="0">
                </div>
                @endforeach
            </div>

            <input type="hidden" name="cart" id="cartInput">

            <!-- Total Price -->
            <label class="block font-semibold text-gray-700 mt-2">Total Price (RON):</label>
            <input type="number" name="total_price" id="totalPrice"
                class="w-full p-2 border border-gray-300 rounded bg-gray-100 text-gray-700 mb-2" readonly required>

            <!-- Email -->
            <label class="block font-semibold text-gray-700">Email:</label>
            <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-green-300 mb-2" required>

            <!-- Phone -->
            <label class="block font-semibold text-gray-700">Phone:</label>
            <input type="text" id="phone" name="phone" class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-green-300 mb-2" required>

            <!-- Address -->
            <label class="block font-semibold text-gray-700">Address:</label>
            <input type="text" id="address" name="address" class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-green-300 mb-2" required>

            <!-- Order Details -->
            <label class="block font-semibold text-gray-700">Order Details (Optional):</label>
            <textarea id="details" name="details" class="w-full p-2 border border-gray-300 rounded focus:ring focus:ring-green-300 mb-4" rows="3"></textarea>

            <!-- Buttons -->
            <button type="submit" onclick="submitOrder()" class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded transition">
                Place Order
            </button>

            <button type="button" onclick="closeModal()" class="w-full bg-gray-500 hover:bg-gray-600 text-white py-2 mt-2 rounded transition">
                Cancel
            </button>
        </form>
    </div>
</div>