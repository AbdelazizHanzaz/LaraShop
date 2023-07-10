@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="bg-white p-8 rounded shadow">
            <h1 class="text-3xl font-semibold mb-4">{{ $product->name }}</h1>
            <p class="mb-4">{{ $product->description }}</p>
            <p class="text-gray-600">${{ $product->price }}</p>
            <a href="{{ route('products.index') }}" class="text-blue-500 hover:underline">Back to Products</a>
        </div>
    </div>
@endsection
