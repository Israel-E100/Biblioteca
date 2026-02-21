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
                        <button class="text-indigo-600 text-sm font-semibold hover:underline">Ver todos</button>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead class="bg-gray-50 text-gray-600 text-sm uppercase">
                                <tr>
                                    <th class="px-6 py-3">Libro</th>
                                    <th class="px-6 py-3">Usuario</th>
                                    <th class="px-6 py-3">Fecha</th>
                                    <th class="px-6 py-3">Estado</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr>
                                    <td class="px-6 py-4 font-medium">Don Quijote de la Mancha</td>
                                    <td class="px-6 py-4">Ana García</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">20 Feb 2024</td>
                                    <td class="px-6 py-4"><span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs">Entregado</span></td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 font-medium">Cien Años de Soledad</td>
                                    <td class="px-6 py-4">Carlos Pérez</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">18 Feb 2024</td>
                                    <td class="px-6 py-4"><span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs">Pendiente</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endsection