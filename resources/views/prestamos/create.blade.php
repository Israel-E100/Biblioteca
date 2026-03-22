@extends('layout.admin')

@section('content')
<main class="flex-1 p-4 sm:p-6 lg:p-10 flex flex-col">

    <div class="w-full mx-auto max-w-2xl bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        
        <div class="bg-gray-50 px-6 py-5 border-b border-gray-100">
            <h2 class="text-2xl font-bold text-gray-800">Buscar Usuario para Préstamo</h2>
        </div>

        <form action="{{ route('prestamos.buscar_usuario') }}" method="POST" class="p-6 sm:p-8">
            @csrf

            <div class="space-y-6">
                <div>
                    <label for="usuario_id" class="block text-gray-700 font-bold mb-2">ID Usuario:</label>
                    <input type="text" name="usuario_id" 
                        placeholder="Ej: 1"
                        class="w-full border-b-2 border-gray-200 py-3 px-1 focus:border-indigo-500 outline-none transition-colors bg-transparent">
                </div>

                <div>
                    <label for="usuario_nombre" class="block text-gray-700 font-bold mb-2">Nombre Usuario:</label>
                    <input type="text" name="usuario_nombre" 
                        placeholder="Ingrese nombre a buscar..."
                        class="w-full border-b-2 border-gray-200 py-3 px-1 focus:border-indigo-500 outline-none transition-colors bg-transparent">
                </div>
            </div>

            <div class="mt-12 flex items-center justify-end gap-6">
                <a href="{{ route('prestamos.index') }}" class="text-gray-400 hover:text-gray-600 font-semibold transition-colors">
                    Cancelar
                </a>
                
                <input type="submit" value="Buscar" 
                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-10 rounded-xl shadow-lg shadow-indigo-200 transition-all cursor-pointer border-none">
            </div>
        </form>

        @isset($usuario)
        <div class="p-6 sm:p-8 border-t border-gray-100 bg-indigo-50/30">
            <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                <span class="w-2 h-6 bg-indigo-600 rounded-full mr-3"></span>
                Usuario Encontrado
            </h2>
            
            <div class="grid grid-cols-1 gap-4">
                <div class="flex items-center p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                    <span class="text-gray-400 font-bold w-24 uppercase text-xs tracking-wider">ID:</span>
                    <span class="text-gray-900 font-semibold">#{{ $usuario->id }}</span>
                </div>

                <div class="flex items-center p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                    <span class="text-gray-400 font-bold w-24 uppercase text-xs tracking-wider">Nombre:</span>
                    <span class="text-gray-900 font-semibold">{{ $usuario->name }}</span>
                </div>

                <div class="flex items-center p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                    <span class="text-gray-400 font-bold w-24 uppercase text-xs tracking-wider">Email:</span>
                    <span class="text-gray-900 font-semibold">{{ $usuario->email }}</span>
                </div>
            </div>
        </div>

        <form action = "{{ route('prestamos.select_libro') }}" method="POST" class="mt-6">
            @csrf
            <input type="hidden" name="usuario_id" value="{{ $usuario->id }}">
            <input type="submit" value="Seleccionar Libro" class= "bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-10 rounded-xl shadow-lg shadow-indigo-200 transition-all cursor-pointer border-none">
        </form>
        @endisset

    </div>
</main>
@endsection