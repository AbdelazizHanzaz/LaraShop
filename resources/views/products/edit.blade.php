@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="bg-white p-8 rounded shadow">
            <h1 class="text-3xl font-semibold mb-4">Edit Product</h1>
            <form action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Name:</label>
                    <input type="text" name="name" id="name" class="w-full p-2 border border-gray-300 rounded focus:outline-none" value="{{ $product->name }}" required>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-semibold mb-2">Description:</label>
                    <textarea name="description" id="description" class="w-full p-2 border border-gray-300 rounded focus:outline-none" required>{{ $product->description }}</textarea>
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-gray-700 font-semibold mb-2">Price:</label>
                    <input type="number" step="0.01" min="0" name="price" id="price" class="w-full p-2 border border-gray-300 rounded focus:outline-none" value="{{ $product->price }}" required>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
            </form>
        </div>
    </div>
@endsection
