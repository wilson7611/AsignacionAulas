<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docentes = Docente::all();
        return view('docentes.index', compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $docente =  Docente::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
        ]);
        return redirect()->route('docentes.index')->with('success', 'docente creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $docente = Docente::findOrFail($id);
        return view('docentes.delete', compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $docente = Docente::findOrFail($id);
        return view('docentes.edit', compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $docente = Docente::findOrFail($id);

       
        $docente->nombre = $request->input('nombre');
        $docente->correo = $request->input('correo');

       
        $docente->save();

        return redirect()->route('docentes.index')->with('success', 'Docente updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $docente = Docente::findOrFail($id);
        $docente->delete();
        return redirect()->route('docentes.index')->with('success', 'Docente Eliminado');        
    }
}
