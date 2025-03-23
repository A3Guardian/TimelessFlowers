@extends('layouts.admin')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Users</h2>
        <button onclick="openModal('Create User')" class="bg-pink-500 text-white px-4 py-2 rounded">Add User</button>
    </div>

    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 border">ID</th>
                <th class="px-4 py-2 border">Name</th>
                <th class="px-4 py-2 border">Email</th>
                <th class="px-4 py-2 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="hover:bg-gray-100">
                <td class="px-4 py-2 border">{{ $user->id }}</td>
                <td class="px-4 py-2 border">{{ $user->name }}</td>
                <td class="px-4 py-2 border">
                    <a href="mailto:{{ $user->email }}" class="text-blue-500">{{ $user->email }}</a>
                </td>
                <td class="px-4 py-2 border text-center">
                    <div class="flex justify-center space-x-2">
                        <button onclick="openModal('Edit User', {{ $user }})" class="bg-yellow-500 text-white px-2 py-1 rounded">
                            Edit
                        </button>
                        <button onclick="confirmDelete({{ $user->id }})" class="bg-red-500 text-white px-2 py-1 rounded">
                            Delete
                        </button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('admin.users.partials.modal')
@include('admin.users.partials.delete-modal')

@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const modal = document.getElementById("userModal");
        const deleteModal = document.getElementById("deleteModal");

        // Close modals when clicking outside
        [modal, deleteModal].forEach(modalEl => {
            modalEl.addEventListener("click", function(event) {
                if (event.target === modalEl) {
                    closeModal();
                }
            });
        });
    });

    function openModal(title = "Create User", user = null) {
        const modal = document.getElementById("userModal");
        document.getElementById("modalTitle").innerText = title;

        document.getElementById("userForm").reset();
        document.getElementById("formMethod").value = user ? "PUT" : "POST";
        document.getElementById("userId").value = user ? user.id : "";
        document.getElementById("userName").value = user ? user.name : "";
        document.getElementById("userEmail").value = user ? user.email : "";
        document.getElementById("userPassword").value = "";

        modal.classList.remove("hidden");
    }

    function closeModal() {
        document.getElementById("userModal").classList.add("hidden");
        document.getElementById("deleteModal").classList.add("hidden");
    }

    function confirmDelete(userId) {
        const deleteModal = document.getElementById("deleteModal");
        const deleteForm = document.getElementById("deleteForm");

        deleteForm.action = `/admin/users/${userId}`;
        deleteModal.classList.remove("hidden");
    }
</script>
@endsection