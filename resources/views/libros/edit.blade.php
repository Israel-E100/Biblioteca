@extends('layout.admin')
@section('content')
    <main class="flex-1 p-6">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Editar Libro</h1>
            <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-800">Volver al Panel</a>
        </div>
        <form action="{{ route('libros.update', $libro->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md w-full max-w-2xl">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="titulo" class="block text-gray-700 font-medium mb-2">Título</label>
                <input type="text" name="titulo" id="titulo" value="{{ $libro->titulo }}" class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-indigo-200" required>
            </div>
            <div class="mb-4">
                <label for="autor" class="block text-gray-700 font-medium mb-2">Autor</label>
                <input type="text" name="autor" id="autor" value="{{ $libro->autor }}" class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-indigo-200" required>
            </div>

            <div class="mb-4">
                <label for="isbn" class="block text-gray-700 font-medium mb-2">ISBN</label>
                <input type="text" name="isbn" id="isbn" value="{{ $libro->isbn }}" class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-indigo-200" required>
            </div>

            <div class="mb-4">
                <label for="editorial" class="block text-gray-700 font-medium mb-2">Editorial</label>
                <input type="text" name="editorial" id="editorial" value="{{ $libro->editorial }}" class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-indigo-200" required>
            </div>

            <div class="mb-4">
                <label for="categoria" class="block text-gray-700 font-medium mb-2">Categoría</label>
                <select name="categoria" id="categoria" class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-indigo-200" required>
                    <option value="">Seleccione una categoría</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ $libro->categoria_id == $categoria->id ? 'selected' : '' }}>{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex justify-end">
                <a href="{{ route('home') }}" class="mr-4 text-gray-600 hover:text-gray-800">Cancelar</a>
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Actualizar Libro</button>
            </div>
        </form>
    </main>
@endsection