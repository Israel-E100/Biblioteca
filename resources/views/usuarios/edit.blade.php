@extends('layout.admin')

@section('content')
<main class="flex-1 p-4 sm:p-6 lg:p-10 flex flex-col">

    <div class="w-full mx-auto max-w-2xl bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        
        <div class="bg-gray-50 px-6 py-5 border-b border-gray-100">
            <h2 class="text-2xl font-bold text-gray-800">Editar Usuario</h2>
            <p class="text-gray-500 text-sm">Completa la información para registrar un nuevo miembro en el sistema.</p>
        </div>

        <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST" class="p-6 sm:p-8">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2 uppercase tracking-wide">Nombre Completo</label>
                    <input type="text" name="nombre" value="{{ old('nombre', $usuario->name) }}" id="nombre" 
                        class="w-full border border-gray-200 p-4 rounded-xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 outline-none transition-all text-lg" 
                        placeholder="Ejemplo: Juan Pérez" required>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2 uppercase tracking-wide">Correo Electrónico</label>
                    <input type="email" name="email" value="{{ old('email', $usuario->email) }}" id="email" 
                        class="w-full border border-gray-200 p-4 rounded-xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 outline-none transition-all text-lg" 
                        placeholder="usuario@ejemplo.com" required>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2 uppercase tracking-wide">Tipo de Usuario</label>
                    <select name="user_type" id="user_type" 
                        class="w-full border border-gray-200 p-4 rounded-xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 outline-none transition-all text-lg bg-white appearance-none">
                        <option value="user" {{ old('user_type', $usuario->user_type) == 'user' ? 'selected' : '' }}>Usuario </option>
                        <option value="admin" {{ old('user_type', $usuario->user_type) == 'admin' ? 'selected' : '' }}>Administrador</option>
                    </select>
                </div>

            </div>

            <div class="mt-10 pt-6 border-t border-gray-50 flex flex-col sm:flex-row items-center justify-between gap-4">
                <a href="{{ route('usuarios.index') }}" class="text-gray-400 hover:text-gray-600 font-medium flex items-center order-2 sm:order-1">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Regresar al listado
                </a>

                <button type="submit" class="w-full sm:w-auto bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-4 px-10 rounded-xl transition-all shadow-lg shadow-indigo-200 flex items-center justify-center order-1 sm:order-2">
                    Guardar Usuario
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </button>
            </div>
        </form>

    </div>
</main>
@endsection