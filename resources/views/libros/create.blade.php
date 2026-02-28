@extends('layout.admin')
@section('content')
<main class="flex-1 p-6 flex flex-col items-center">
    <div class="w-full max-w-2xl">
        <h1 class="text-2xl font-bold text-gray-800">Agregar Nuevo Libro</h1>
    </div>

    <form action="{{ route('libros.store') }}" method="POST" class="mt-6 bg-white p-6 rounded-lg shadow-md w-full max-w-2xl">
        @csrf
        <div class="mb-4">
            <label for="titulo" class="block text-gray-700 font-medium mb-2">Título</label>
            <input type="text" name="titulo" id="titulo" class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-indigo-200" required>
        </div>
        <div class="mb-4">
            <label for="autor" class="block text-gray-700 font-medium mb-2">Autor</label>
            <input type="text" name="autor" id="autor" class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-indigo-200" required>
        </div>

        <div class="mb-4">
            <label for="isbn" class="block text-gray-700 font-medium mb-2">ISBN</label>
            <input type="text" name="isbn" id="isbn" class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-indigo-200" required>
        </div>

        <div class="mb-4">
            <label for="editorial" class="block text-gray-700 font-medium mb-2">Editorial</label>
            <input type="text" name="editorial" id="editorial" class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-indigo-200" required>
        </div>

        <div class="mb-4">
            <label for="categoria" class="block text-gray-700 font-medium mb-2">Categoría</label>
            <select name="categoria" id="categoria" class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-indigo-200" required>
                <option value="">Seleccione una categoría</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex justify-end">
            <a href="{{ route('home') }}" class="mr-4 text-gray-600 hover:text-gray-800">Cancelar</a>
            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Guardar Libro</button>
        </div>
        
    </form>
</main>
@endsection