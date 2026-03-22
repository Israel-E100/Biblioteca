@extends('layout.admin')

@section('content')
<main class="flex-1 p-4 sm:p-6 lg:p-10 flex flex-col items-center justify-center">

    <div class="w-full max-w-lg bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        
        <div class="bg-red-50 p-8 flex justify-center border-b border-red-100/50">
            <div class="bg-red-100 p-4 rounded-full shadow-inner">
                <svg class="w-12 h-12 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                </svg>
            </div>
        </div>

        <div class="p-6 sm:p-8 text-center">
            <h2 class="text-2xl font-bold text-gray-800 tracking-tight">¿Eliminar a {{ $usuario->name }}?</h2>
            <p class="text-gray-500 mt-2">
                Estás a punto de eliminar permanentemente a este usuario del sistema. 
                <span class="block font-medium text-red-500">Esta acción no se puede deshacer.</span>
            </p>

            <div class="mt-8 p-5 bg-gray-50 rounded-2xl border border-gray-100 text-left">
                <div class="flex items-start">
                    <div class="flex-shrink-0 h-14 w-14 bg-white border border-gray-200 rounded-xl flex items-center justify-center text-gray-400 shadow-sm">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </div>

                    <div class="ml-4 flex-1">
                        <div class="flex justify-between items-start">
                            <div>
                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">ID #{{ $usuario->id }}</span>
                                <p class="text-base font-bold text-gray-900 leading-tight">{{ $usuario->name }}</p>
                            </div>
                            <span class="px-2.5 py-1 text-[10px] font-bold uppercase rounded-lg bg-indigo-50 text-indigo-600 border border-indigo-100">
                                {{ $usuario->user_type }}
                            </span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1 truncate">{{ $usuario->email }}</p>
                    </div>
                </div>
            </div>

            <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" class="mt-8 flex flex-col gap-3">
                @csrf
                @method('DELETE')

                <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-4 rounded-xl transition-all shadow-lg shadow-red-200 flex items-center justify-center group">
                    <svg class="w-5 h-5 mr-2 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg>
                    Confirmar Eliminación
                </button>

                <a href="{{ route('usuarios.index') }}" class="w-full py-2 text-gray-400 hover:text-gray-600 font-medium transition-colors text-sm">
                    No, cancelar y volver al listado
                </a>
            </form>
        </div>
    </div>

</main>
@endsection