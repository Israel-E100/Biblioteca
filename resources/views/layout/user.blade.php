<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>BiblioUser - Mi Biblioteca</title>
</head>
<body class="bg-gray-50 font-sans">

    <nav class="bg-white border-b border-gray-200 fixed w-full z-30 top-0">
        <div class="px-4 py-3 lg:px-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <button id="toggleSidebar" class="p-2 mr-2 text-gray-600 rounded cursor-pointer lg:hidden hover:text-gray-900 hover:bg-gray-100">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="flex items-center text-blue-700 font-bold text-2xl tracking-tight">
                        <i class="fas fa-book-open mr-2"></i> BiblioUser
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="hidden sm:block text-gray-600">Bienvenido, {{auth()->user()->name}}</span>
                    
                    <a href="{{ route('logout') }}" class="flex items-center text-gray-500 hover:text-red-600 transition-colors space-x-1">
                        <i class="fas fa-sign-out-alt text-lg"></i>
                        <span class="hidden sm:inline">Salir</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex pt-16 overflow-hidden bg-gray-50">
        <aside id="sidebar" class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-300 lg:flex transition-width" aria-label="Sidebar">
            <div class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200">
                <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
                    <div class="flex-1 px-3 space-y-1 bg-white">
                        <ul class="space-y-2 pb-2">
                            <li>
                                <a href="#" class="flex items-center p-3 text-white bg-indigo-600 rounded-lg group shadow-md">
                                    <i class="fas fa-home w-6"></i>
                                    <span class="ml-3">Inicio</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center p-3 text-gray-700 rounded-lg hover:bg-gray-100 group transition-all">
                                    <i class="fas fa-bookmark w-6"></i>
                                    <span class="ml-3">Mis Préstamos</span>
                                </a>
                            </li>
                        </ul>
                        <hr class="my-4 border-gray-100">
                        <ul class="space-y-2">
                            <li>
                                <a href="{{route('logout')}}" class="flex items-center p-3 text-red-500 rounded-lg hover:bg-red-50 group transition-all">
                                    <i class="fas fa-power-off w-6"></i>
                                    <span class="ml-3">Cerrar Sesión</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>

        <div id="sidebarOverlay" class="fixed inset-0 z-10 hidden bg-gray-900/50 lg:hidden"></div>
        <main id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 min-h-screen">
            @yield('content')
            @include('partials.user.footer')
        </main>
    </div>

    <script>
        const btnToggle = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');

        function toggleMenu() {
            sidebar.classList.toggle('hidden');
            overlay.classList.toggle('hidden');
        }

        btnToggle.addEventListener('click', toggleMenu);
        overlay.addEventListener('click', toggleMenu);
    </script>
</body>
</html>