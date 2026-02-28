<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Biblioteca - Panel de Control</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <header class="fixed w-full z-30 top-0 bg-white border-b border-gray-200">
        <div class="px-4 py-3 flex items-center justify-between">
            <div class="flex items-center">
                <button id="btn-sidebar-toggle" class="p-2 mr-4 text-gray-600 lg:hidden focus:outline-none hover:bg-gray-100 rounded">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                <div class="flex items-center text-indigo-600 font-bold text-2xl">
                    <i class="fas fa-book-reader mr-2"></i>
                    <span class="hidden sm:inline">BiblioAdmin</span>
                </div>
            </div>

            <nav class="hidden md:flex space-x-6 items-center">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-indigo-600 transition">Inicio</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600 transition">Usuarios</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600 transition">Libros</a>
                <a href="{{ route('logout') }}" class="flex items-center text-red-500 hover:text-red-700 font-medium transition">
                    <i class="fas fa-sign-out-alt mr-1"></i> Salir
                </a>
            </nav>
        </div>
    </header>

    <div class="flex pt-16 overflow-hidden bg-gray-50">
        
        <div id="sidebar-overlay" class="fixed inset-0 bg-gray-900/50 z-10 hidden lg:hidden"></div>

        <aside id="sidebar" class="fixed left-0 z-20 flex-col flex-shrink-0 hidden w-64 h-full pt-4 duration-300 transition-width lg:flex bg-white border-r border-gray-200">
            <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
                <nav class="flex-1 px-3 space-y-1">

                    <a href="{{ route('home') }}" 
                        class="flex items-center p-3 rounded-lg transition {{ request()->routeIs('home') ? 'bg-indigo-600 text-white' : 'text-gray-400 hover:bg-gray-800' }}">
                            <i class="fas fa-home mr-3"></i>
                            <span>Inicio</span>
                    </a>
                    <a href="{{ route('categorias.index') }}" 
                        class="flex items-center p-3 rounded-lg transition {{ request()->routeIs('categorias.*') ? 'bg-indigo-600 text-white' : 'text-gray-400 hover:bg-gray-800' }}">
                        <i class="fas fa-tags mr-3"></i>
                        <span>Categorías</span>
                    </a>
                    <a href="#" 
                        class="flex items-center p-3 rounded-lg transition {{ request()->routeIs('libros.*') ? 'bg-indigo-600 text-white' : 'text-gray-400 hover:bg-gray-800' }}">
                        <i class="fas fa-book mr-3"></i>
                        <span>Libros</span>
                    </a>
                    <a href="{{ route('logout') }}" class="flex items-center p-3 text-base font-normal text-red-600 rounded-lg hover:bg-red-50 group">
                        <i class="fas fa-power-off w-6"></i>
                        <span class="ml-3">Salir</span>
                    </a>
                </nav>
            </div>
        </aside>

    @yield('content')
    @include('partials.admin.footer')

