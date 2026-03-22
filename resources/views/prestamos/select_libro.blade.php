@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Seleccionar Libro</h1>

    <div class="bg-white shadow-md rounded-lg p-6 mt-4">
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

        <form action="{{ route('prestamos.store') }}" method="POST">
            @csrf
            <label for="libro" class="block text-gray-700 font-bold mb-2">ID Libro:</label>
            <select name="libro_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @foreach($libros as $libro)
                    <option value="{{ $libro->id }}">{{ $libro->titulo }} - {{ $libro->autor  }} </option>
                @endforeach
            </select>

            <input type="hidden" name="usuario_id" value="{{ $usuario->id }}">

            <div class="flex items-center justify-between mt-4">
                <input type="submit" value="Prestar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                <a href="{{ route('prestamos.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</div>
@endsection