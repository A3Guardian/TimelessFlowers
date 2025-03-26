@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Add Product</h1>
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Name</label>
        <input type="text" name="name" class="form-control" required>

        <label>Price</label>
        <input type="number" name="price" class="form-control" required>

        <label>Category</label>
        <input type="text" name="category" class="form-control" required>

        <label>Image</label>
        <input type="file" name="image" class="form-control">

        <label>Description</label>
        <textarea name="description" class="form-control"></textarea>

        <label>Stock</label>
        <input type="number" name="stock" class="form-control" required>

        <button type="submit" class="btn btn-primary mt-3">Save</button>
    </form>
</div>
@endsection