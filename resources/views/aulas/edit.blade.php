@extends('layouts.app')

@section('contenido')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              Editar Aula
            </div>
            <div class="card-body">
              <form action="{{ route('aulas.update', $aula->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                  <label for="name">Nombre</label>
                  <input type="text" name="nombre" required class="form-control" value="{{ $aula->nombre }}">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="number" name="capacidad" required class="form-control" value="{{ $aula->capacidad }}">
                </div>
               <br>
               
                <div class="justify-content-end">
                  <input type="submit" value="Actualizar" class="btn btn-success">
                  <a href="{{route('aulas.index')}}" class="btn btn-info">Cancelar</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection