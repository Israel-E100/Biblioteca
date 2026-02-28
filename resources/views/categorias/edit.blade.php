@extends('layout.admin')
@extends('layout.admin')

@section('content')
<div class="ml-64 min-h-screen bg-gray-50 p-10">
    
    <div class="max-w-full mx-auto bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        
        <div class="bg-gray-50 px-8 py-5 border-b border-gray-100 flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Editar Categoría</h2>
                <p class="text-gray-500 text-sm">Modifica el nombre o descripción de la categoría.</p>
            </div>
            <a href="{{ route('categorias.index') }}" class="text-indigo-600 hover:text-indigo-800 font-medium">
                Volver a la lista
            </a>
        </div>

        <form action="{{ route('categorias.update', $categoria->id) }}" method="POST" class="p-8">
            @csrf 
            @method('PUT')
            
            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2 uppercase">Nombre de la Categoría</label>
                    <input type="text" name="nombre" value="{{ $categoria->nombre }}"
                        class="w-full border border-gray-200 p-4 rounded-xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 outline-none transition-all text-lg" required>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2 uppercase">Descripción</label>
                    <textarea name="descripcion" rows="5" 
                        class="w-full border border-gray-200 p-4 rounded-xl focus:ring-4 focus:ring-indigo-500/10 outline-none">{{ $categoria->descripcion }}</textarea>
                </div>
            </div>

            <div class="mt-10 pt-6 border-t border-gray-50 flex justify-end">
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-4 px-10 rounded-xl transition-all shadow-lg shadow-indigo-200">
                    Guardar Cambios
                </button>
            </div>
        </form>
    </div>
</div>
@endsection