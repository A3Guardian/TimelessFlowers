<div id="editModal" class="modal fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-[400px]">
        <h2 class="text-xl font-bold mb-4">Edit Order</h2>
        <form action="" method="POST" id="editOrderForm">
            @csrf
            @method('PUT')
            <input type="hidden" id="editOrderId">
            <label for="status" class="block font-bold">Status:</label>
            <select id="status" name="status" class="w-full p-2 border rounded">
                <option value="in progress">In Progress</option>
                <option value="canceled">Cancelled</option>
                <option value="done">Completed</option>
            </select>
            <button type="submit" class="w-full bg-green-600 text-white py-2 mt-4 rounded">Update Order</button>
        </form>

        <button onclick="closeModal()" class="w-full bg-gray-500 text-white py-2 mt-2 rounded">Cancel</button>
    </div>
</div>