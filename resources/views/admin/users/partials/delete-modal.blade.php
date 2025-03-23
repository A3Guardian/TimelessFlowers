<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
    <div class="bg-white p-6 rounded-lg shadow-lg w-1/3 relative">
        <button onclick="closeModal()" class="absolute top-3 right-4 text-gray-600 hover:text-gray-900 text-2xl">
            &times;
        </button>

        <h2 class="text-xl font-bold mb-4 text-gray-800">Confirm Deletion</h2>
        <p class="text-gray-600 mb-4">Are you sure you want to delete this user? This action cannot be undone.</p>

        <form id="deleteForm" method="POST">
            @csrf
            @method('DELETE')

            <div class="flex justify-end space-x-2">
                <button type="button" onclick="closeModal()" class="bg-gray-600 text-pink-600 px-4 py-2 rounded hover:bg-gray-700">
                    Cancel
                </button>
                <button type="submit" class="bg-pink-500 text-white px-4 py-2 rounded hover:bg-pink-600">
                    Delete
                </button>
            </div>
        </form>
    </div>
</div>