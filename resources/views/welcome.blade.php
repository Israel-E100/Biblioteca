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
                <a href="#" class="text-gray-600 hover:text-indigo-600 transition">Inicio</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600 transition">Usuarios</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600 transition">Libros</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600 transition">Préstamos</a>
                <a href="#" class="flex items-center text-red-500 hover:text-red-700 font-medium transition">
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
                    <a href="#" class="flex items-center p-3 text-base font-normal text-white bg-indigo-600 rounded-lg group">
                        <i class="fas fa-home w-6"></i>
                        <span class="ml-3">Inicio</span>
                    </a>
                    <a href="#" class="flex items-center p-3 text-base font-normal text-gray-700 rounded-lg hover:bg-gray-100 group">
                        <i class="fas fa-book w-6 text-gray-400 group-hover:text-indigo-600 transition"></i>
                        <span class="ml-3">Libros</span>
                    </a>
                    <a href="#" class="flex items-center p-3 text-base font-normal text-gray-700 rounded-lg hover:bg-gray-100 group">
                        <i class="fas fa-exchange-alt w-6 text-gray-400 group-hover:text-indigo-600 transition"></i>
                        <span class="ml-3">Préstamos</span>
                    </a>
                    <hr class="my-4 border-gray-200">
                    <a href="#" class="flex items-center p-3 text-base font-normal text-red-600 rounded-lg hover:bg-red-50 group">
                        <i class="fas fa-power-off w-6"></i>
                        <span class="ml-3">Salir</span>
                    </a>
                </nav>
            </div>
        </aside>

        <main id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 transition-all duration-300 min-h-screen flex flex-col">
            
            <div class="p-6 flex-grow">
                <div class="mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Panel de Control</h1>
                    <p class="text-gray-500">Bienvenido al sistema de gestión de la biblioteca.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex items-center justify-between">
                            <h3 class="text-gray-500 font-medium">Libros Totales</h3>
                            <i class="fas fa-book text-indigo-500"></i>
                        </div>
                        <p class="text-3xl font-bold mt-2">1,248</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex items-center justify-between">
                            <h3 class="text-gray-500 font-medium">Préstamos Activos</h3>
                            <i class="fas fa-clock text-orange-500"></i>
                        </div>
                        <p class="text-3xl font-bold mt-2">84</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex items-center justify-between">
                            <h3 class="text-gray-500 font-medium">Usuarios</h3>
                            <i class="fas fa-users text-green-500"></i>
                        </div>
                        <p class="text-3xl font-bold mt-2">312</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="p-4 border-b border-gray-100 flex justify-between items-center">
                        <h3 class="font-bold text-gray-700">Préstamos Recientes</h3>
                        <button class="text-indigo-600 text-sm font-semibold hover:underline">Ver todos</button>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead class="bg-gray-50 text-gray-600 text-sm uppercase">
                                <tr>
                                    <th class="px-6 py-3">Libro</th>
                                    <th class="px-6 py-3">Usuario</th>
                                    <th class="px-6 py-3">Fecha</th>
                                    <th class="px-6 py-3">Estado</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr>
                                    <td class="px-6 py-4 font-medium">Don Quijote de la Mancha</td>
                                    <td class="px-6 py-4">Ana García</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">20 Feb 2024</td>
                                    <td class="px-6 py-4"><span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs">Entregado</span></td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 font-medium">Cien Años de Soledad</td>
                                    <td class="px-6 py-4">Carlos Pérez</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">18 Feb 2024</td>
                                    <td class="px-6 py-4"><span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs">Pendiente</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <footer class="p-4 bg-white border-t border-gray-200 mt-auto">
                <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
                    <p>&copy; 2024 Biblioteca Nacional. Todos los derechos reservados.</p>
                    <div class="flex space-x-4 mt-2 md:mt-0">
                        <a href="#" class="hover:text-indigo-600">Soporte</a>
                        <a href="#" class="hover:text-indigo-600">Privacidad</a>
                    </div>
                </div>
            </footer>
        </main>
    </div>

    <script>
        const btnToggle = document.getElementById('btn-sidebar-toggle');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebar-overlay');

        function toggleMenu() {
            sidebar.classList.toggle('hidden');
            overlay.classList.toggle('hidden');
            // Evitar scroll cuando el menú está abierto en móvil
            document.body.classList.toggle('overflow-hidden');
        }

        btnToggle.addEventListener('click', toggleMenu);
        overlay.addEventListener('click', toggleMenu);

        // Cerrar al redimensionar si pasamos a desktop
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                sidebar.classList.remove('hidden');
                overlay.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            } else {
                sidebar.classList.add('hidden');
            }
        });
    </script>
</body>
</html>