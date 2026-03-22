@extends('layout.admin')

@section('content')
<main class="flex-1 p-4 sm:p-6 lg:p-10 flex flex-col">
    <div class="w-full mx-auto max-w-6xl bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        
        <div class="bg-gray-50 px-6 py-5 border-b border-gray-100 flex flex-col sm:flex-row sm:justify-between sm:items-center gap-5">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Lista de Usuarios</h2>
                <p class="text-gray-500 text-sm">Gestiona los accesos y roles de los usuarios registrados.</p>
            </div>
            
            <a href="{{ route('usuarios.create') }}" class="w-full sm:w-auto text-center justify-center bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-8 rounded-xl transition-all shadow-lg shadow-indigo-200 flex items-center">
                <svg class="w-5 h-5 mr-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Crear Usuario
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50">
                        <th class="px-6 py-4 text-sm font-bold text-gray-700 uppercase tracking-wide border-b border-gray-100">ID</th>
                        <th class="px-6 py-4 text-sm font-bold text-gray-700 uppercase tracking-wide border-b border-gray-100">Nombre</th>
                        <th class="px-6 py-4 text-sm font-bold text-gray-700 uppercase tracking-wide border-b border-gray-100">Email</th>
                        <th class="px-6 py-4 text-sm font-bold text-gray-700 uppercase tracking-wide border-b border-gray-100">Tipo</th>
                        <th class="px-6 py-4 text-sm font-bold text-gray-700 uppercase tracking-wide border-b border-gray-100 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($usuarios as $usuario)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 text-gray-600 text-sm">#{{ $usuario->id }}</td>
                        <td class="px-6 py-4 text-gray-900 font-medium text-sm">{{ $usuario->name }}</td>
                        <td class="px-6 py-4 text-gray-600 text-sm">{{ $usuario->email }}</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-indigo-100 text-indigo-700">
                                {{ $usuario->user_type }}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex justify-center gap-3">
                                <a href="{{ route('usuarios.edit', $usuario->id) }}" class="text-indigo-600 hover:text-indigo-900 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 external_link.25 0 113.182 3.182L12 18.707l-4 1 1-4 9.586-9.586z"></path>
                                    </svg>
                                </a>

                                <a href="{{ route('usuarios.delete_confirm', $usuario->id) }}" class="text-red-500 hover:text-red-700 transition-colors">Eliminar</a>
                                
                                <!-- <form action="" method="POST" class="inline-block" onsubmit="return confirm('¿Estás seguro?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button> -->

                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</main>
@endsection