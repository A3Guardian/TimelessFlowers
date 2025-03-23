@extends('layouts.admin')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-xl font-bold mb-4">Create User</h2>

    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block">Name</label>
            <input type="text" name="name" class="w-full border px-4 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block">Email</label>
            <input type="email" name="email" class="w-full border px-4 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block">Password</label>
            <input type="password" name="password" class="w-full border px-4 py-2" required>
        </div>
        <button type="submit" class="bg-pink-500 text-white px-4 py-2 rounded">Create</button>
    </form>
</div>
@endsection