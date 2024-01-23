@extends('layouts.app')

@section('contenido')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              Eliminar docente
            </div>
            <div class="card-body">
              <form action="{{ route('docentes.destroy', $docente->id) }}" method="POST">
                @method('DELETE')
                @csrf
               <p>Deseas Eliminar a <span>{{$docente->nombre}}</span>
               </p>
               
                <div class="justify-content-end">
                  <input type="submit" value="SI" class="btn btn-success">
                  <a href="{{route('docentes.index')}}" class="btn btn-danger">Cancelar</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection