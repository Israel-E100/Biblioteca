@extends('layout.admin')

@section('content')
<div class="ml-64 min-h-screen bg-gray-50 p-6 md:p-10">
    
    <div class="max-w-full mx-auto bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        
        <div class="bg-gray-50 px-8 py-5 border-b border-gray-100">
            <h2 class="text-2xl font-bold text-gray-800">Crear Nueva Categoría</h2>
            <p class="text-gray-500 text-sm">Completa la información para organizar tus libros.</p>
        </div>

        <form action="{{ route('categorias.store') }}" method="POST" class="p-8">
            @csrf 
            
            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2 uppercase tracking-wide">Nombre de la Categoría</label>
                    <input type="text" id="nombre" name="nombre" 
                        class="w-full border border-gray-200 p-4 rounded-xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 outline-none transition-all text-lg" 
                        placeholder="Ejemplo: Novela Histórica, Fantasía, Programación..." required>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2 uppercase tracking-wide">Descripción Detallada</label>
                    <textarea name="descripcion" rows="5" 
                        class="w-full border border-gray-200 p-4 rounded-xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 outline-none transition-all" 
                        placeholder="Escribe una breve descripción de qué libros pertenecen aquí..."></textarea>
                </div>
            </div>

            <div class="mt-10 pt-6 border-t border-gray-50 flex items-center justify-between">
                <a href="{{ route('categorias.index') }}" class="text-gray-400 hover:text-gray-600 font-medium flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Regresar al listado
                </a>
                
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-4 px-10 rounded-xl transition-all shadow-lg shadow-indigo-200 flex items-center">
                    Guardar Categoría
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                </button>
            </div>
        </form>

    </div>
</div>
@endsection