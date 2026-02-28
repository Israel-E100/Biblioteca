@extends('layout.admin')
@section('content')
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
                        <a href="{{ route('libros.create') }}" class="text-indigo-600 text-sm font-semibold hover:underline">Agregar Libro</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead class="bg-gray-50 text-gray-600 text-sm uppercase">
                                <tr>
                                    <th class="px-6 py-3">Titulo</th>
                                    <th class="px-6 py-3">Autor</th>
                                    <th class="px-6 py-3">ISBN</th>
                                    <th class="px-6 py-3">Editorial</th>
                                    <th class="px-6 py-3">Categoría</th>
                                    <th class="px-6 py-3">Acciones</th>
                                </tr>
                            </thead>
                            @foreach($libros as $libro)
                            <tbody class="divide-y divide-gray-100">
                                <tr>
                                    <td class="px-6 py-4 font-medium">{{ $libro->titulo }}</td>
                                    <td class="px-6 py-4">{{ $libro->autor }}</td>
                                    <td class="px-6 py-4">{{ $libro->isbn }}</td>
                                    <td class="px-6 py-4">{{ $libro->editorial }}</td>
                                    <td class="px-6 py-4">{{ $libro->categoria->nombre ?? 'Sin Categoría' }}</td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('libros.edit', $libro->id) }}" class="text-blue-600 hover:underline mr-2">Editar</a>
                                        <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                                    </td>
                                </tr>
                            </tbody>

                            @if($libros->count() == 0)
                                    <tbody>
                                        <tr>
                                            <td colspan="7" class="px-6 py-4 text-center text-gray-500">No hay libros registrados.</td>
                                        </tr>
                                    </tbody>
                            @endif

                            @endforeach 
                        </table>

                        <!-- paginacion -->

                            <div class="mt-4">
                                {{ $libros->links() }}
                            </div>
                    </div>
                </div>
            </div>
            @endsection