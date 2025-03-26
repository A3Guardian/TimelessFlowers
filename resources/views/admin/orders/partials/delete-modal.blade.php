<div id="deleteModal" class="modal fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-[400px]">
        <h2 class="text-xl font-bold mb-4 text-red-600">Confirm Delete</h2>
        <p>Are you sure you want to delete this order?</p>
        <form action="" method="POST" id="deleteOrderForm">
            @csrf
            @method('DELETE')
            <input type="hidden" id="deleteOrderId">
            <button type="submit" class="w-full bg-red-600 text-white py-2 mt-4 rounded">Delete</button>
        </form>
        <button onclick="closeModal()" class="w-full bg-gray-500 text-white py-2 mt-2 rounded">Cancel</button>
    </div>
</div>