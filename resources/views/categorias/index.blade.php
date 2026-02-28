@extends('layout.admin')

@section('content')
<div class="flex flex-col min-h-screen bg-gray-50 ml-0 md:ml-64 transition-all duration-300">
    
    <main class="flex-grow p-4 md:p-10">
        <div class="max-w-5xl mx-auto"> 
            
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-10 gap-4">
                <div>
                    <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight">Categorías</h1>
                    <p class="text-gray-500 mt-1">Gestiona los géneros y secciones de tu biblioteca.</p>
                    @if(session('success'))
                        <div class="mt-4 p-4 bg-green-100 text-green-700 rounded-lg">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                
                <a href="{{ route('categorias.create') }}" class="inline-flex items-center bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-5 py-3 rounded-xl shadow-md transition-all transform hover:-translate-y-1">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Nueva Categoría
                </a>
            </div>

            <div class="bg-white shadow-xl rounded-2xl border border-gray-100 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full border-collapse">
                        <thead>
                            <tr class="bg-gray-50 border-b border-gray-100">
                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-400 uppercase">ID</th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-400 uppercase">Nombre</th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-400 uppercase">Descripción</th>
                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-400 uppercase">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            @forelse($categorias as $categoria)
                            <tr class="hover:bg-indigo-50/30 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $categoria->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $categoria->nombre }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $categoria->descripcion }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    <a href="{{ route('categorias.edit', $categoria->id) }}" class="text-indigo-600 hover:text-indigo-900 font-semibold">Editar</a>
                                    <span class="mx-1 text-gray-300">|</span>
                                    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 font-semibold">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="px-6 py-4 text-center text-sm text-gray-500">No hay categorías registradas.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection