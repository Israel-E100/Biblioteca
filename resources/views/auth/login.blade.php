@extends('layout.auth')

@section('content')

<main class="flex-grow flex flex-col items-center justify-center py-10">
        
        <div class="flex justify-center items-center gap-2 mb-10">
            <svg class="h-10 w-10 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9 4.804A7.993 7.993 0 002 12a7.998 7.998 0 007 7.917V4.804zm2 0V19.917A7.998 7.998 0 0018 12a7.993 7.993 0 00-7-7.196z"></path>
            </svg>
            <span class="text-3xl font-bold text-indigo-700 tracking-tight">BiblioAdmin</span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 w-full max-w-5xl">
            
            <div class="bg-white p-8 shadow-md border border-gray-100 rounded-xl">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Iniciar Sesión</h2>
                <form action="#" method="POST" class="space-y-5">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Correo Electrónico</label>
                        <input type="email" name="email" required 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all sm:text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
                        <input type="password" name="password" required 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all sm:text-sm">
                    </div>
                    <button type="submit" 
                        class="w-full bg-indigo-600 text-white py-2.5 rounded-lg font-semibold hover:bg-indigo-700 transition-colors shadow-sm">
                        Ingresar
                    </button>
                </form>
            </div>

            <div class="bg-white p-8 shadow-md border border-gray-100 rounded-xl">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Crear Cuenta</h2>
                <form action="#" method="POST" class="space-y-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                            <input type="text" name="name" required 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all sm:text-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Apellido</label>
                            <input type="text" name="lastname" required 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all sm:text-sm">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Correo Electrónico</label>
                        <input type="email" name="email" required 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all sm:text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
                        <input type="password" name="password" required 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all sm:text-sm">
                        </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Repetir Contraseña</label>
                        <input type="password" name="password_confirm" required 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all sm:text-sm">
                    </div>
                    <button type="submit" 
                        class="w-full bg-indigo-600 text-white py-2.5 rounded-lg font-semibold hover:bg-indigo-700 transition-colors shadow-sm">
                        Registrarse
                    </button>
                </form>
            </div>
        </div>
    </main>
    @endsection