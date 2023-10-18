<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Aplicação</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-500 p-4 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-2xl font-semibold text-white">Produtos</a>

            <div class="hidden md:flex space-x-4">
                <a href="{{ route('home') }}" class="font-semibold hover:underline">Home</a>
                <a href="{{ route('products.create') }}" class="font-semibold hover:underline">Cadastrar Produto</a>
                <a href="{{ route('products.index') }}" class="font-semibold hover:underline">Catálogo de Produtos</a>
            </div>

            <div class="md:hidden">
                <button id="menu-toggle" class="text-white hover:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div id="menu" class="hidden md:hidden">
            <ul class="flex flex-col space-y-2">
                <li><a href="{{ route('home') }}" class="font-semibold hover:underline">Home</a></li>
                <li><a href="{{ route('products.create') }}" class="font-semibold hover:underline">Cadastrar Produto</a></li>
                <li><a href="{{ route('products.index') }}" class="font-semibold hover:underline">Catálogo de Produtos</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mx-auto mt-8">
        @yield('content')
    </div>
    <footer class="text-center text-gray-500 text-sm mt-8">
        &copy; {{ date('Y') }} Moises Galdino
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuToggle = document.getElementById("menu-toggle");
            const menu = document.getElementById("menu");

            if (menuToggle && menu) {
                menuToggle.addEventListener("click", function () {
                    menu.classList.toggle("hidden");
                    menuToggle.classList.toggle("open");
                });
            }
        });
    </script>
<style>
    .open .line-1 {
        transform: rotate(-45deg) translate(-5px, 6px);
    }

    .open .line-2 {
        opacity: 0;
    }

    .open .line-3 {
        transform: rotate(45deg) translate(-5px, -6px);
    }
</style>


</body>
</html>
