<div id="cartDrawer" class="fixed inset-y-0 z-50 right-0 w-96 bg-white shadow-lg transform translate-x-full transition-transform duration-300 flex flex-col">
    <div class="p-4 flex justify-between items-center border-b">
        <h2 class="text-2xl font-bold">Shopping Cart</h2>
        <button onclick="toggleCartDrawer()" class="text-gray-500 hover:text-red-500 text-3xl">&times;</button>
    </div>

    <div id="cartItems" class="flex-1 overflow-y-auto p-4 space-y-4">
    </div>

    <div class="p-4 border-t">
        <button onclick="toggleOrderModal()" class="w-full bg-green-600 text-white text-lg py-3 rounded-lg hover:bg-green-700 transition">
            Place Order
        </button>
    </div>
</div>