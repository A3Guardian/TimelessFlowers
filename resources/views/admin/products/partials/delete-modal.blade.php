<div id="deleteModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
        <h2 class="text-xl font-bold mb-4">Confirm Deletion</h2>
        <p>Are you sure you want to delete this product?</p>

        <form id="deleteForm" method="POST">
            @csrf
            @method('DELETE')

            <div class="flex justify-end space-x-2 mt-4">
                <button type="button" onclick="closeModal()" class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
            </div>
        </form>
    </div>
</div>