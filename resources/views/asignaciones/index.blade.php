@extends('layouts.app')

@section('contenido')
    {{-- <div class="row">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="col-md-5 m-4">
                    <h2>Registro Previo</h2>
                    <form action="{{ route('asignaciones.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="materia" class="form-label">Materia</label>
                            <select name="materia_id" class="form-select">
                                <option value="">Seleccione Materia</option>
                                @foreach ($materias as $materia)
                                    <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="docente" class="form-label">Docente</label>
                            <select name="docente_id" class="form-select">
                                <option value="">Seleccione Docente</option>
                                @foreach ($docentes as $docente)
                                    <option value="{{ $docente->id }}">{{ $docente->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="turno" class="form-label">Turno</label>
                            <br>
                            <!-- Base Radios -->
                            <div class="form-check form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="turno" id="flexRadioDefault1"
                                    value="Mañana">
                                <label class="form-check-label" for="flexRadioDefault1">Mañana</label>
                            </div>
                            <div class="form-check form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="turno" id="flexRadioDefault2"
                                    value="Tarde">
                                <label class="form-check-label" for="flexRadioDefault2">Tarde</label>
                            </div>
                            <div class="form-check form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="turno" id="flexRadioDefault3"
                                    value="Noche">
                                <label class="form-check-label" for="flexRadioDefault3">Noche</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="numero_estudiantes" class="form-label"># Estudiantes</label>
                            <input type="number" class="form-control" name="numero_estudiantes">
                        </div>
                        <div class="mb-3 mt-2">
                            <input type="submit" class="btn btn-success" value="Registrar">
                        </div>
                    </form>
                </div>
                <div class="vertical-hr"></div>
                <div class="col-md-6">
                    <h2>Previo a Registro de Aulas</h2>
                    <form action="{{ route('asignaciones.asignarAulasMasivo') }}" method="POST">
                        @csrf
                        <table class="table table-bordered nowrap table-striped align-middle table-responsive">
                            <thead>
                                <tr>
                                    <th style="width: 5%">#</th>
                                    <th style="width: 25%">Materia</th>
                                    <th style="width: 30%">Docente</th>
                                    <th style="width: 10%"># Estudiantes</th>
                                    <th style="width: 30%">Turno</th>
                                    <th style="width: 10%">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($asignaciones as $asignacion)
                                    <tr>
                                        <td>{{ $asignacion->id }}</td>
                                        <td>{{ optional($asignacion->materias)->nombre }}</td>
                                        <td>{{ optional($asignacion->docentes)->nombre }}</td>
                                        <td>{{ $asignacion->numero_estudiantes }}</td>
                                        <td>{{ $asignacion->turnos }}</td>
                                        <td>
                                            <input type="checkbox" name="asignaciones_seleccionadas[]"
                                                value="{{ $asignacion->id }}">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary">Asignar Aulas</button>
                    </form>
                </div>
            </div>
            <br>
            <h2>Aulas Asignadas</h2>
            <form action="">
                <table class="table table-bordered nowrap table-striped align-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Materia</th>
                            <th>Docente</th>
                            <th>Turno</th>
                            <th>Aula</th>
                            <th>Capacidad</th>
                            <th>Dias</th>
                            <th>Confirmar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($asignacionAulas as $asignacionAula)
                            <tr>
                                <td>{{ $asignacionAula->id }}</td>
                                <td>{{ optional($asignacionAula->asignacion_previas->materias)->nombre }}</td>
                                <td>{{ optional($asignacionAula->asignacion_previas->docentes)->nombre }}</td>
                                <td>{{ $asignacionAula->asignacion_previas->turnos }}</td>
                                <td>{{ optional($asignacionAula->aulas)->nombre }}</td>
                                <td>{{ optional($asignacionAula->aulas)->capacidad }}</td>

                                <td>
                                    <div class="mb-3">

                                        <!-- Base Radios -->
                                        <div class="form-check form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="turno"
                                                id="flexRadioDefault1" value="Mañana">
                                            <label class="form-check-label" for="flexRadioDefault1">Lunes</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="turno"
                                                id="flexRadioDefault2" value="Tarde">
                                            <label class="form-check-label" for="flexRadioDefault2">Martes</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="turno"
                                                id="flexRadioDefault3" value="Noche">
                                            <label class="form-check-label" for="flexRadioDefault3">Miercoles</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="turno"
                                                id="flexRadioDefault3" value="Noche">
                                            <label class="form-check-label" for="flexRadioDefault3">Jueves</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="turno"
                                                id="flexRadioDefault3" value="Noche">
                                            <label class="form-check-label" for="flexRadioDefault3">Viernes</label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <label for="">Si</label>
                                    <input type="checkbox" name="asignaciones_seleccionadas[]"
                                        value="{{ $asignacion->id }}">
                                    <label for="">No</label>
                                    <input type="checkbox" name="asignaciones_seleccionadas[]"
                                        value="{{ $asignacion->id }}">
                                </td>
                                <td>
                                    <a href="" class="btn btn-warning btn-sm">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div> --}}

    <div class="row">


        <div class="col-xxl-12 m-auto ">

            <div class="card">
                <div class="card-body">

                    <div class="border">
                        <ul class="nav nav-pills custom-hover-nav-tabs">
                            <li class="nav-item">
                                <a href="#custom-hover-customere" data-bs-toggle="tab" aria-expanded="false"
                                    class="nav-link active">
                                    <i class="ri-file-text-line nav-icon nav-tab-position"></i>
                                    <h5 class="nav-titl nav-tab-position m-0">Registro Previo</h5>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#custom-hover-description" data-bs-toggle="tab" aria-expanded="true"
                                    class="nav-link">
                                    <i class=" ri-home-3-line  nav-icon nav-tab-position"></i>
                                    <h5 class="nav-titl nav-tab-position m-0">Asignar Aulas</h5>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#custom-hover-reviews" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                    <i class="ri-book-2-fill nav-icon nav-tab-position"></i>
                                    <h5 class="nav-titl nav-tab-position m-0">Historial</h5>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content text-muted">
                            <div class="tab-pane show active" id="custom-hover-customere">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5>Registro Previo</h5>
                                        <form action="{{ route('asignaciones.store') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="materia" class="form-label">Materia</label>
                                                <select name="materia_id" class="form-select">
                                                    <option value="">Seleccione Materia</option>
                                                    @foreach ($materias as $materia)
                                                        <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="docente" class="form-label">Docente</label>
                                                <select name="docente_id" class="form-select">
                                                    <option value="">Seleccione Docente</option>
                                                    @foreach ($docentes as $docente)
                                                        <option value="{{ $docente->id }}">{{ $docente->nombre }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="turno" class="form-label">Turno</label>
                                                <br>
                                                <!-- Base Radios -->
                                                <div class="form-check form-check-inline mb-2">
                                                    <input class="form-check-input" type="radio" name="turno"
                                                        id="flexRadioDefault1" value="Mañana">
                                                    <label class="form-check-label" for="flexRadioDefault1">Mañana</label>
                                                </div>
                                                <div class="form-check form-check-inline mb-2">
                                                    <input class="form-check-input" type="radio" name="turno"
                                                        id="flexRadioDefault2" value="Tarde">
                                                    <label class="form-check-label" for="flexRadioDefault2">Tarde</label>
                                                </div>
                                                <div class="form-check form-check-inline mb-2">
                                                    <input class="form-check-input" type="radio" name="turno"
                                                        id="flexRadioDefault3" value="Noche">
                                                    <label class="form-check-label" for="flexRadioDefault3">Noche</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="numero_estudiantes" class="form-label"># Estudiantes</label>
                                                <input type="number" class="form-control" name="numero_estudiantes">
                                            </div>
                                            <div class="mb-3 mt-2">
                                                <input type="submit" class="btn btn-success" value="Registrar">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-8">

                                        <div class="table-responsive">
                                            <h5>Registrar Aulas</h5>
                                            <form action="{{ route('asignaciones.asignarAulasMasivo') }}" method="POST">
                                                @csrf
                                                <table
                                                    class="table table-bordered nowrap table-striped align-middle table-responsive">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 5%">#</th>
                                                            <th style="width: 25%">Materia</th>
                                                            <th style="width: 30%">Docente</th>
                                                            <th style="width: 10%"># Estudiantes</th>
                                                            <th style="width: 30%">Turno</th>
                                                            <th style="width: 10%">Acción</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($asignaciones as $asignacion)
                                                            <tr>
                                                                <td>{{ $asignacion->id }}</td>
                                                                <td>{{ optional($asignacion->materias)->nombre }}</td>
                                                                <td>{{ optional($asignacion->docentes)->nombre }}</td>
                                                                <td>{{ $asignacion->numero_estudiantes }}</td>
                                                                <td>{{ $asignacion->turnos }}</td>
                                                                <td>
                                                                    <input type="checkbox"
                                                                        name="asignaciones_seleccionadas[]"
                                                                        value="{{ $asignacion->id }}">
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <button type="submit" class="btn btn-primary">Asignar Aulas</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane" id="custom-hover-description">
                                
                                <div class="table-responsive">
                                    <h5>Aulas Asignadas</h5>
                                    <form action="" method="POST">
                                        @csrf
                                        <table class="table table-bordered nowrap table-striped align-middle">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Materia</th>
                                                    <th>Docente</th>
                                                    <th>Turno</th>
                                                    <th># Estudiantes</th>
                                                    <th>Aula</th>
                                                    <th>Capacidad</th>
                                                    <th>Dias</th>
                                                    <th>Confirmar</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($asignacionAulas as $asignacionAula)
                                                    <tr>
                                                        <td>{{ $asignacionAula->id }}</td>
                                                        <td>{{ optional($asignacionAula->asignacion_previas->materias)->nombre }}
                                                        </td>
                                                        <td>{{ optional($asignacionAula->asignacion_previas->docentes)->nombre }}
                                                        </td>
                                                        <td>{{ $asignacionAula->asignacion_previas->turnos }}</td>
                                                        <td>{{ $asignacionAula->asignacion_previas->numero_estudiantes }}</td>
                                                        <td>{{ optional($asignacionAula->aulas)->nombre }}</td>
                                                        <td>{{ optional($asignacionAula->aulas)->capacidad }}</td>

                                                        <td>
                                                            <div class="mb-3">

                                                                <!-- Base Radios -->
                                                                <label for="">Lunes</label>
                                                                <input type="checkbox">
                                                                <label for="">Martes</label>
                                                                <input type="checkbox">
                                                                <label for="">Miercoles</label>
                                                                <input type="checkbox">
                                                                <label for="">Jueves</label>
                                                                <input type="checkbox">
                                                                <label for="">Viernes</label>
                                                                <input type="checkbox">

                                                        </td>
                                                        <td>
                                                            <label for="">Si</label>
                                                            <input type="checkbox" name="asignaciones_seleccionadas[]"
                                                                value="{{ $asignacion->id }}">
                                                            <label for="">No</label>
                                                            <input type="checkbox" name="asignaciones_seleccionadas[]"
                                                                value="{{ $asignacion->id }}">
                                                        </td>
                                                        <td>
                                                            <a href="" class="btn btn-warning btn-sm">Editar</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <button type="submit" class="btn btn-success">Confirmar</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane" id="custom-hover-reviews">
                                <table class="table table-bordered nowrap table-striped align-middle table-responsive">
                                    <thead>
                                        <tr>
                                            <th >#</th>
                                            <th >Materia</th>
                                            <th >Docente</th>
                                            <th ># Estudiantes</th>
                                            <th >Turno</th>
                                            <th>Dias</th>
                                            <th >Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div>
            </div><!--end col-->


        </div><!--end row-->
    @endsection
