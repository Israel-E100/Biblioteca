@extends('layout.admin')

@section('content')
<main class="flex-1 p-4 sm:p-6 lg:p-10 flex flex-col">
    <div class="w-full mx-auto max-w-7xl bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        
        <div class="bg-gray-50 px-6 py-5 border-b border-gray-100 flex flex-col sm:flex-row sm:justify-between sm:items-center gap-5">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Préstamos de Libros</h2>
                <p class="text-gray-500 text-sm">Control de salidas y devoluciones de la biblioteca.</p>
            </div>

            <a href="{{ route('prestamos.create') }}" class="w-full sm:w-auto text-center justify-center bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-8 rounded-xl transition-all shadow-lg shadow-indigo-200 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Nuevo Préstamo
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50/50">
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest border-b border-gray-100">ID</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest border-b border-gray-100">Libro</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest border-b border-gray-100">Usuario</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest border-b border-gray-100">Fecha</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest border-b border-gray-100">Estatus</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest border-b border-gray-100 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($prestamos as $prestamo)
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-4 py-3 border-b border-gray-100 text-gray-600">#{{ $prestamo->id }}</td>
                        <td class="px-4 py-3 border-b border-gray-100 font-semibold text-gray-700">{{ $prestamo->libro->titulo }}</td>
                        <td class="px-4 py-3 border-b border-gray-100 text-gray-600">{{ $prestamo->usuario->name }}</td>
                        <td class="px-4 py-3 border-b border-gray-100 text-gray-500 text-sm">{{ $prestamo->created_at->format('d/m/Y') }}</td>
                        
                        <td class="px-4 py-3 border-b border-gray-100">
                            @if($prestamo->estado == 'entregado')
                                <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-1 bg-green-50 text-green-600 border border-green-100 rounded-md">
                                    Disponible
                                </span>
                            @else
                                <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-1 bg-amber-50 text-amber-600 border border-amber-100 rounded-md">
                                    Pendiente
                                </span>
                            @endif
                        </td>

                        <td class="px-4 py-3 border-b border-gray-100 text-center">
                            @if($prestamo->estado == 'pendiente')
                                <form action="" method="POST" class="inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="text-xs font-bold bg-emerald-500 hover:bg-emerald-600 text-white px-4 py-2 rounded-lg transition-transform active:scale-95 shadow-sm">
                                        ENTREGAR
                                    </button>
                                </form>
                            @else
                                <span class="text-gray-300 text-xs italic">Completado</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection