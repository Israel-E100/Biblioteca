<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliosoft | Gestión Bibliotecaria Moderna</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-white text-slate-900 font-sans antialiased">

    <header class="fixed w-full z-50 top-0 bg-white/80 backdrop-blur-md border-b border-slate-100">
        <nav class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="#" class="flex items-center gap-2 group">
                <div class="bg-blue-600 p-2 rounded-lg group-hover:bg-blue-700 transition">
                    <i class="fas fa-book-open text-white"></i>
                </div>
                <span class="text-xl font-bold tracking-tight text-slate-800">Biblio<span class="text-blue-600">soft</span></span>
            </a>

            <div class="hidden md:flex items-center gap-8">
                <a href="#" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition">Inicio</a>
                <a href="#" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition">Servicios</a>
                <a href="#" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition">Contacto</a>
                <div class="h-6 w-px bg-slate-200"></div>
                <a href="{{ route('login') }}" class="text-sm font-bold text-blue-600 hover:text-blue-700">Iniciar Sesión</a>
                <a href="#" class="bg-blue-600 text-white px-5 py-2.5 rounded-full text-sm font-bold hover:bg-blue-700 transition shadow-md shadow-blue-200">
                    Comenzar Gratis
                </a>
            </div>

            <button id="hamburger-btn" class="md:hidden p-2 text-slate-600 focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </nav>

        <div id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-white border-b border-slate-100 p-6 flex flex-col gap-4 shadow-xl md:hidden">
            <a href="#" class="text-lg font-semibold text-slate-700">Inicio</a>
            <a href="#" class="text-lg font-semibold text-slate-700">Servicios</a>
            <a href="#" class="text-lg font-semibold text-slate-700">Contacto</a>
            <hr class="border-slate-100">
            <a href="{{ route('login') }}" class="text-lg font-bold text-blue-600">Iniciar Sesión</a>
        </div>
    </header>

    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">
            
            <div class="relative z-10">
                <span class="inline-block py-1 px-3 rounded-full bg-blue-50 text-blue-600 text-xs font-bold uppercase tracking-wider mb-6">
                    Nueva Versión 4.0 disponible
                </span>
                <h1 class="text-5xl lg:text-7xl font-extrabold text-slate-900 leading-[1.1] mb-8">
                    Organiza tu biblioteca con <span class="text-blue-600">precisión.</span>
                </h1>
                <p class="text-lg text-slate-600 leading-relaxed mb-10 max-w-lg">
                    La plataforma definitiva para gestionar colecciones, usuarios y préstamos de forma automatizada. Diseñada para bibliotecas escolares, públicas y privadas.
                </p>
                <div class="flex flex-wrap gap-4">
                    <button class="bg-slate-900 text-white px-8 py-4 rounded-xl font-bold hover:bg-slate-800 transition-all transform hover:-translate-y-1 shadow-xl">
                        Ver Catálogo
                    </button>
                    <button class="border border-slate-200 bg-white text-slate-700 px-8 py-4 rounded-xl font-bold hover:bg-slate-50 transition-all transform hover:-translate-y-1">
                        Saber más
                    </button>
                </div>
            </div>

            <div class="relative">
                <div class="absolute -top-20 -right-20 w-64 h-64 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-pulse"></div>
                <div class="absolute -bottom-20 -left-20 w-72 h-72 bg-indigo-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-pulse delay-700"></div>
                
                <div class="relative bg-slate-100 rounded-3xl overflow-hidden shadow-2xl border border-white">
                    <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                         alt="Biblioteca moderna" 
                         class="w-full h-[500px] object-cover">
                    <div class="absolute bottom-6 left-6 right-6 bg-white/90 backdrop-blur p-6 rounded-2xl shadow-lg border border-white/50">
                        <div class="flex items-center gap-4">
                            <div class="flex -space-x-2">
                                <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?u=1" alt="user">
                                <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?u=2" alt="user">
                            </div>
                            <p class="text-sm font-medium text-slate-700">Más de 2,000 bibliotecarios ya confían en nosotros.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-slate-50 border-t border-slate-200 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center gap-2 mb-6 text-2xl font-bold text-slate-800">
                        <div class="bg-blue-600 p-1.5 rounded-md">
                            <i class="fas fa-book-open text-white text-sm"></i>
                        </div>
                        <span>Biblio<span class="text-blue-600">soft</span></span>
                    </div>
                    <p class="text-slate-500 max-w-sm mb-6">
                        Soluciones tecnológicas para la gestión del conocimiento. Transformamos bibliotecas tradicionales en centros digitales inteligentes.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="text-slate-400 hover:text-blue-600 transition text-xl"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-slate-400 hover:text-blue-600 transition text-xl"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-slate-400 hover:text-blue-600 transition text-xl"><i class="fab fa-github"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="font-bold text-slate-900 mb-6 uppercase text-xs tracking-widest">Plataforma</h4>
                    <ul class="space-y-4 text-sm font-medium text-slate-500">
                        <li><a href="#" class="hover:text-blue-600">Características</a></li>
                        <li><a href="#" class="hover:text-blue-600">Precios</a></li>
                        <li><a href="#" class="hover:text-blue-600">API</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-slate-900 mb-6 uppercase text-xs tracking-widest">Soporte</h4>
                    <ul class="space-y-4 text-sm font-medium text-slate-500">
                        <li><a href="#" class="hover:text-blue-600">Ayuda</a></li>
                        <li><a href="#" class="hover:text-blue-600">Privacidad</a></li>
                        <li><a href="#" class="hover:text-blue-600">Términos</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="pt-8 border-t border-slate-200 text-center md:text-left flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-slate-400 text-xs font-medium uppercase tracking-tighter">
                    © 2026 Bibliosoft Technologies Inc. Todos los derechos reservados.
                </p>
                <p class="text-slate-400 text-xs font-medium">
                    Hecho con <i class="fas fa-heart text-red-400"></i> para lectores.
                </p>
            </div>
        </div>
    </footer>

    <script>
        const btn = document.getElementById('hamburger-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            // Cambiar icono de hamburguesa a X
            const icon = btn.querySelector('i');
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-times');
        });

        // Cerrar menú al redimensionar si es necesario
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 768) {
                menu.classList.add('hidden');
                btn.querySelector('i').classList.add('fa-bars');
                btn.querySelector('i').classList.remove('fa-times');
            }
        });
    </script>
</body>
</html>