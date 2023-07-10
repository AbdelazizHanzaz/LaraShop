@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold mb-4">Manage Products</h1>

        <a href="{{ route('products.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 mb-4">
            <i class="material-icons">add</i>
            Create New Product
        </a>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($products as $product)
                <div class="relative bg-white p-4 rounded shadow">
                    <h2 class="text-xl font-semibold mb-2">{{ $product->name }}</h2>
                    <img src="{{ $product->image ?: 'https://via.placeholder.com/300' }}" alt="{{ $product->name }}" class="mb-4 rounded-lg w-full h-48 object-cover">

                    <p class="mb-4">{{ $product->description }}</p>
                    <p class="text-gray-600">${{ $product->price }}</p>
                    <div class="absolute bottom-4 right-4 flex space-x-2">
                        <a href="{{ route('products.show', $product->id) }}" class="text-blue-500 hover:underline">
                            <i class="material-icons">visibility</i> View
                        </a>
                        <a href="{{ route('products.edit', $product->id) }}" class="text-yellow-500 hover:underline">
                            <i class="material-icons">edit</i> Edit
                        </a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Are you sure you want to delete this product?')">
                                <i class="material-icons">delete</i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
