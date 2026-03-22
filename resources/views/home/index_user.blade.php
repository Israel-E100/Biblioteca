@extends('layout.user')
@section('content')

            <div class="px-6 py-8">
                <div class="mb-6">
                    <h1 class="text-2xl font-semibold text-gray-800">Hola de nuevo, {{auth()->user()->name}}</h1>
                    <p class="text-gray-500">¿Qué vas a leer hoy?</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-indigo-100 text-indigo-600 rounded-lg">
                                <i class="fas fa-book-reader text-xl"></i>
                            </div>
                            <span class="text-xs font-medium px-2.5 py-0.5 rounded bg-green-100 text-green-800">Al día</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800">Libros Prestados</h3>
                        <p class="text-3xl font-extrabold text-indigo-600 mt-2">2</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-amber-100 text-amber-600 rounded-lg">
                                <i class="fas fa-clock text-xl"></i>
                            </div>
                            <span class="text-xs font-medium px-2.5 py-0.5 rounded bg-amber-100 text-amber-800">Próximo Venc.</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800">Días para devolver</h3>
                        <p class="text-3xl font-extrabold text-amber-600 mt-2">4</p>
                    </div>
                </div>

                <div class="mt-10">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Tu lectura actual</h2>
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden flex flex-col md:flex-row">
                        <div class="md:w-32 bg-gray-200 flex items-center justify-center p-4">
                            <i class="fas fa-book text-4xl text-gray-400"></i>
                        </div>
                        <div class="p-6 flex-1">
                            <h4 class="text-lg font-bold">Cien Años de Soledad</h4>
                            <p class="text-gray-500 text-sm italic">Gabriel García Márquez</p>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 mt-4">
                                <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 45%"></div>
                            </div>
                            <p class="text-xs text-gray-500 mt-2">45% completado</p>
                        </div>
                    </div>
                </div>

            </div>

@endsection