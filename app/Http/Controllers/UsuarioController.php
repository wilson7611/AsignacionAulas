<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::all();
        $roles = Role::all()->pluck('name', 'id');
        return view('usuarios.index', compact('usuarios','roles'));
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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'rol' => 'required|string|exists:roles,name',
        ]);
    
        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ];
    
        $user = User::create($userData);
    
        // Asignar el rol
        $user->assignRole($request->rol);
    
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $usuarios = User::findOrFail($id);
        $roles = Role::all()->pluck('name', 'id');
        return view('usuarios.delete', compact('usuarios', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuario = User::findOrFail($id);

        $roles = Role::all()->pluck('name', 'id');

        return view('usuarios.edit', compact('usuario', 'roles'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);

        $usuario->name = $request->name;
        $usuario->email = $request->email;

        if ($request->password != null) {
            $usuario->password = $request->password;
        }

        $usuario->syncRoles([$request->rol]);

        $usuario->save();

        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $usuario = User::findOrFail($id);

        $usuario->removeRole($usuario->roles->implode('name', ', '));

        if ($usuario->delete()) {
            return redirect()->route('usuarios.index');
        }

        return response()->json([
            'mensaje' => 'Error al eliminar el usuario.'
        ]);
    }
}
