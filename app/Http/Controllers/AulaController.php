<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aulas = Aula::all();
        return view('aulas.index', compact('aulas'));
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
        $aula = Aula::create([
            'nombre' => $request->input('nombre'),
            'capacidad' => $request->input('capacidad'),
        ]);
        return redirect()->route('aulas.index')->with('success', 'Creado Exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $aula = Aula::findOrFail($id);
        return view('aulas.delete', compact('aula'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $aula = Aula::findOrFail($id);
        return view('aulas.edit', compact('aula'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $aula = Aula::findOrFail($id);
        $aula->update($request->all());
        return redirect()->route('aulas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $aula = Aula::findOrFail($id);
        $aula->delete();
        return redirect()->route('aulas.index');
    }
}
