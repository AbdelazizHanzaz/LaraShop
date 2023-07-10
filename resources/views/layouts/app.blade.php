<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My E-commerce App</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="bg-green-600 text-white py-4">
        <div class="container mx-auto flex items-center justify-between">
            <a href="{{ route('products.index') }}" class="text-xl font-semibold">My E-commerce App</a>

            <!-- Responsive Navbar Toggle Button -->
            <button class="text-white block lg:hidden focus:outline-none">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <ul class="hidden lg:flex space-x-4">
                <li><a href="{{ route('products.index') }}" class="hover:underline">Products</a></li>
                <li><a href="#" class="hover:underline">Cart</a></li>
                <li><a href="#" class="hover:underline">Orders</a></li>
                <!-- Add other navbar links as needed -->
            </ul>
        </div>
    </nav>

    <div class="py-8">
        @yield('content')
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
