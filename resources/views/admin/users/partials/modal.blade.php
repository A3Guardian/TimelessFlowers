<!-- Modal Background -->
<div id="userModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
    <div class="bg-white p-6 rounded-lg shadow-lg w-1/2 relative">
        <!-- Close Button -->
        <button onclick="closeModal()" class="absolute top-3 right-4 text-gray-600 hover:text-gray-900 text-2xl">
            &times;
        </button>

        <h2 id="modalTitle" class="text-2xl font-bold mb-4 text-gray-800">Create User</h2>

        <!-- Modal Form -->
        <form id="userForm" method="POST">
            @csrf
            <input type="hidden" name="_method" id="formMethod">
            <input type="hidden" name="user_id" id="userId">

            <div class="mb-4">
                <label class="block font-semibold text-gray-700">Name</label>
                <input type="text" name="name" id="userName" class="w-full border border-gray-300 px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-pink-500" required>
            </div>

            <div class="mb-4">
                <label class="block font-semibold text-gray-700">Email</label>
                <input type="email" name="email" id="userEmail" class="w-full border border-gray-300 px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-pink-500" required>
            </div>

            <div class="mb-4">
                <label class="block font-semibold text-gray-700">Password</label>
                <input type="password" name="password" id="userPassword" class="w-full border border-gray-300 px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-pink-500">
            </div>

            <div class="flex justify-end space-x-2">
                <button type="button" onclick="closeModal()" class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-800">Cancel</button>
                <button type="submit" class="bg-pink-500 text-white px-4 py-2 rounded hover:bg-pink-600">Save</button>
            </div>
        </form>
    </div>
</div>