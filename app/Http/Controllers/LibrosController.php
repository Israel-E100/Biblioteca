<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Libro;

class LibrosController extends Controller
{
    public function create()
    {
        $categorias = Categoria::all();
        return view('libros.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'categoria' => 'required|exists:categorias,id',
        ]);

        // Crear un nuevo libro
        $libro = new Libro();
        $libro->titulo = $request->input('titulo');
        $libro->autor = $request->input('autor');
        $libro->isbn = $request->input('isbn');
        $libro->editorial = $request->input('editorial');   
        $libro->categoria_id = $request->input('categoria');
        $libro->save();

        // Redirigir a la página de libros con un mensaje de éxito
        return redirect()->route('home')->with('success', 'Libro creado exitosamente.');
    }

    public function edit($id)
    {
        $libro = Libro::findOrFail($id);
        $categorias = Categoria::all();
        return view('libros.edit', compact('libro', 'categorias'));
    }

    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'categoria' => 'required|exists:categorias,id',
        ]);

        // Actualizar el libro existente
        $libro = Libro::findOrFail($id);
        $libro->titulo = $request->input('titulo');
        $libro->autor = $request->input('autor');
        $libro->isbn = $request->input('isbn');
        $libro->editorial = $request->input('editorial');   
        $libro->categoria_id = $request->input('categoria');
        $libro->save();

        // Redirigir a la página de libros con un mensaje de éxito
        return redirect()->route('home')->with('success', 'Libro actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();

        return redirect()->route('home')->with('success', 'Libro eliminado exitosamente.');
    }

}
