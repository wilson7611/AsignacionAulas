<?php

namespace App\Http\Controllers;

use App\Models\AsignacionAula;
use App\Models\AsignacionPrevia;
use App\Models\Aula;
use Illuminate\Http\Request;

class AsignacionAulaController extends Controller
{
    public function historial()
    {
        $historiales = AsignacionPrevia::all();
        return view('asignaciones.index', compact('historiales'));
    }
}
