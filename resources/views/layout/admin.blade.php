<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Biblioteca - Panel de Control</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .sidebar-gradient {
            background: linear-gradient(180deg, #f8fafc 0%, #e2e8f0 100%);
        }
        .hover-lift {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .hover-lift:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 to-gray-100 font-sans leading-normal tracking-normal">

    <header class="fixed w-full z-30 top-0 bg-white/95 backdrop-blur-md border-b border-gray-200 shadow-lg">
        <div class="px-6 py-4 flex items-center justify-between">
            <div class="flex items-center">
                <button id="btn-sidebar-toggle" class="p-3 mr-4 text-gray-700 lg:hidden focus:outline-none hover:bg-indigo-50 rounded-xl transition-all duration-200 hover:scale-105">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                <div class="flex items-center text-indigo-700 font-bold text-3xl">
                    <div class="w-10 h-10 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center mr-3 shadow-md">
                        <i class="fas fa-book-reader text-white"></i>
                    </div>
                    <span class="hidden sm:inline bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">BiblioAdmin</span>
                </div>
            </div>

            <nav class="hidden md:flex space-x-8 items-center flex-1 ml-12">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-indigo-600 transition-all duration-200 font-medium px-3 py-2 rounded-lg hover:bg-indigo-50">Inicio</a>
                <a href="{{ route('categorias.index') }}" class="text-gray-700 hover:text-indigo-600 transition-all duration-200 font-medium px-3 py-2 rounded-lg hover:bg-indigo-50">Categorías</a>
                <a href="#" class="text-gray-700 hover:text-indigo-600 transition-all duration-200 font-medium px-3 py-2 rounded-lg hover:bg-indigo-50">Libros</a>
                <a href="{{ route('prestamos.index') }}" class="text-gray-700 hover:text-indigo-600 transition-all duration-200 font-medium px-3 py-2 rounded-lg hover:bg-indigo-50">Préstamos</a>
                <a href="{{ route('usuarios.index') }}" class="text-gray-700 hover:text-indigo-600 transition-all duration-200 font-medium px-3 py-2 rounded-lg hover:bg-indigo-50">Usuarios</a>
            </nav>

            <div class="hidden md:flex items-center space-x-4">
                <div class="flex items-center space-x-3 border-r border-gray-200 pr-4">
                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center hover-lift cursor-pointer">
                        <i class="fas fa-user text-blue-600 text-lg"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-gray-800 font-semibold text-sm">{{ auth()->user()->name ?? 'Usuario' }}</span>
                        <span class="text-gray-500 text-xs">{{ auth()->user()->email ?? 'usuario@email.com' }}</span>
                    </div>
                </div>
                <a href="{{ route('logout') }}" class="flex items-center text-red-500 hover:text-red-700 font-medium transition-all duration-200 px-4 py-2 rounded-lg hover:bg-red-50 hover-lift">
                    <i class="fas fa-sign-out-alt mr-2"></i> Salir
                </a>
            </div>
        </div>
    </header>

    <div class="flex pt-20 overflow-hidden bg-gradient-to-br from-slate-50 to-gray-100">
        
        <div id="sidebar-overlay" class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm z-10 hidden lg:hidden"></div>

        <aside id="sidebar" class="fixed left-0 top-20 z-20 flex-col flex-shrink-0 hidden w-72 h-[calc(100vh-5rem)] pt-6 duration-300 transition-all lg:flex sidebar-gradient border-r border-gray-200 shadow-xl">
            <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
                <nav class="flex-1 px-4 space-y-2">

                    <a href="{{ route('home') }}" 
                        class="flex items-center p-4 rounded-xl transition-all duration-200 {{ request()->routeIs('home') ? 'bg-gradient-to-r from-indigo-500 to-purple-600 text-white shadow-lg' : 'text-gray-600 hover:bg-white hover:shadow-md hover-lift' }}">
                            <i class="fas fa-home mr-4 text-lg"></i>
                            <span class="font-medium">Inicio</span>
                    </a>
                    <a href="{{ route('categorias.index') }}" 
                        class="flex items-center p-4 rounded-xl transition-all duration-200 {{ request()->routeIs('categorias.*') ? 'bg-gradient-to-r from-indigo-500 to-purple-600 text-white shadow-lg' : 'text-gray-600 hover:bg-white hover:shadow-md hover-lift' }}">
                        <i class="fas fa-tags mr-4 text-lg"></i>
                        <span class="font-medium">Categorías</span>
                    </a>
                    <a href="#libros" 
                        class="flex items-center p-4 rounded-xl transition-all duration-200 {{ request()->routeIs('libros.*') ? 'bg-gradient-to-r from-indigo-500 to-purple-600 text-white shadow-lg' : 'text-gray-600 hover:bg-white hover:shadow-md hover-lift' }}">
                        <i class="fas fa-book mr-4 text-lg"></i>
                        <span class="font-medium">Libros</span>
                    </a>
                    <a href="{{ route('prestamos.index') }}" 
                        class="flex items-center p-4 rounded-xl transition-all duration-200 {{ request()->routeIs('prestamos.*') ? 'bg-gradient-to-r from-indigo-500 to-purple-600 text-white shadow-lg' : 'text-gray-600 hover:bg-white hover:shadow-md hover-lift' }}">
                        <i class="fas fa-book mr-4 text-lg"></i>
                        <span class="font-medium">Préstamos</span>
                    </a>
                    <a href="{{ route('usuarios.index') }}" 
                        class="flex items-center p-4 rounded-xl transition-all duration-200 {{ request()->routeIs('usuarios.*') ? 'bg-gradient-to-r from-indigo-500 to-purple-600 text-white shadow-lg' : 'text-gray-600 hover:bg-white hover:shadow-md hover-lift' }}">
                        <i class="fas fa-users mr-4 text-lg"></i>
                        <span class="font-medium">Usuarios</span>
                    </a>
                    <a href="{{ route('logout') }}" class="flex items-center p-4 rounded-xl transition-all duration-200 text-red-600 hover:bg-red-50 hover:shadow-md hover-lift">
                        <i class="fas fa-power-off mr-4 text-lg"></i>
                        <span class="font-medium">Salir</span>
                    </a>
                </nav>
            </div>
        </aside>

        <main class="flex-1 flex flex-col overflow-auto bg-gradient-to-br from-slate-50 to-gray-100 lg:pl-72">
            @yield('content')
            @include('partials.admin.footer')
        </main>
    </div>
    <script>
        const btn = document.getElementById('btn-sidebar-toggle');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebar-overlay');

        btn.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
            overlay.classList.toggle('hidden');
            // Cambiar icono de hamburguesa a X
            const icon = btn.querySelector('i');
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-times');
        });

        // Cerrar menú al hacer clic en el overlay
        overlay.addEventListener('click', () => {
            sidebar.classList.add('hidden');
            overlay.classList.add('hidden');
            const icon = btn.querySelector('i');
            icon.classList.add('fa-bars');
            icon.classList.remove('fa-times');
        });

        // Cerrar menú al hacer clic en un enlace
        document.querySelectorAll('#sidebar a').forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth < 1024) {
                    sidebar.classList.add('hidden');
                    overlay.classList.add('hidden');
                    const icon = btn.querySelector('i');
                    icon.classList.add('fa-bars');
                    icon.classList.remove('fa-times');
                }
            });
        });

        // Cerrar menú al redimensionar si es necesario
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                sidebar.classList.remove('hidden');
                overlay.classList.add('hidden');
                const icon = btn.querySelector('i');
                icon.classList.add('fa-bars');
                icon.classList.remove('fa-times');
            }
        });
    </script>
</body>
</html>

