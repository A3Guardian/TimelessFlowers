@extends('layouts.admin')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-xl font-bold mb-4">Edit User</h2>

    <form action="{{ route('admin.users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block">Name</label>
            <input type="text" name="name" class="w-full border px-4 py-2" value="{{ $user->name }}" required>
        </div>
        <div class="mb-4">
            <label class="block">Password (leave blank to keep current)</label>
            <input type="password" name="password" class="w-full border px-4 py-2">
        </div>

        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection