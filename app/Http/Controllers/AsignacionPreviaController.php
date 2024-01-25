<?php

namespace App\Http\Controllers;

use App\Models\AsignacionAula;
use App\Models\Docente;
use App\Models\Materia;
use App\Models\AsignacionPrevia;
use App\Models\Aula;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class AsignacionPreviaController extends Controller
{
    public function index()
    {
        $materias = Materia::all();
        $docentes = Docente::all();
        $asignaciones = AsignacionPrevia::all();
        $asignacionAulas = AsignacionAula::all();
        return view('asignaciones.index', compact('materias', 'docentes', 'asignaciones', 'asignacionAulas'));
    }
    public function store(Request $request)
    {
        $nuevaAsignacion = AsignacionPrevia::create([
            'materia_id' => $request->materia_id,
            'docente_id' => $request->docente_id,
            'numero_estudiantes' => $request->numero_estudiantes,
            'turno' => $request->turno,
        ]);



        return redirect()->route('asignaciones.index')->with('success', 'Asignación previa creada exitosamente.');
    }
    public function asignarAulasMasivo(Request $request)
    {
        
        $asignacionesSeleccionadas = $request->input('asignaciones_seleccionadas', []);

        if (empty($asignacionesSeleccionadas)) {
            return redirect()->back()->with('error', 'No se seleccionaron asignaciones para la asignación de aulas.');
        }

       
        $aulasDisponibles = Aula::pluck('id')->toArray();
        $aulasAsignadas = AsignacionAula::pluck('aula_id')->toArray();
        $aulasNoAsignadas = array_diff($aulasDisponibles, $aulasAsignadas);

        if (empty($aulasNoAsignadas)) {
            return redirect()->back()->with('error', 'Ya se han asignado todas las aulas disponibles.');
        }


        foreach ($asignacionesSeleccionadas as $asignacionId) {
           
            $asignacionPrevia = AsignacionPrevia::find($asignacionId);

            if ($asignacionPrevia) {
        
                $capacidadAulas = Aula::whereIn('id', $aulasNoAsignadas)->pluck('capacidad', 'id')->toArray();
                $numEstudiantes = $asignacionPrevia->numero_estudiantes;

                foreach ($capacidadAulas as $aulaId => $capacidad) {
                    if ($capacidad >= $numEstudiantes) {
                        
                        $asignacionAula = new AsignacionAula([
                            'aula_id' => $aulaId,
                        ]);

                       
                        $asignacionPrevia->asignacionAulas()->save($asignacionAula);

                     
                        $aulasNoAsignadas = array_diff($aulasNoAsignadas, [$aulaId]);

                        break; 
                    }
                }
            }
        }

        return redirect()->back()->with('success', 'Aulas asignadas automáticamente a las asignaciones seleccionadas.');
    }
    public function asignarAula(AsignacionPrevia $asignacionPrevia)
    {
        
        $aulasDisponibles = Aula::pluck('id')->toArray();
        $aulasAsignadas = $asignacionPrevia->asignacionAulas()->pluck('aula_id')->toArray();

        $aulasNoAsignadas = array_diff($aulasDisponibles, $aulasAsignadas);

        if (empty($aulasNoAsignadas)) {
            return redirect()->back()->with('error', 'Ya se han asignado todas las aulas disponibles.');
        }

       
        $capacidadAulas = Aula::whereIn('id', $aulasNoAsignadas)->pluck('capacidad', 'id')->toArray();
        $numEstudiantes = $asignacionPrevia->numero_estudiantes;

        foreach ($capacidadAulas as $aulaId => $capacidad) {
            if ($capacidad >= $numEstudiantes) {
                
                $asignacionAula = new AsignacionAula([
                    'aula_id' => $aulaId,
                ]);

               
                $asignacionPrevia->asignacionAulas()->save($asignacionAula);

                return redirect()->back()->with('success', 'Aula asignada correctamente.');
            }
        }

        return redirect()->back()->with('error', 'No hay aulas disponibles con suficiente capacidad.');
    }
    
}
