@extends('layouts.app')

@section('contenido')
    @include('aulas.create')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mb-0">Lista De Aulas</h5>
                    <a class="btn btn-light" href="" data-bs-toggle="modal" data-bs-target="#addUserModal">
                        <i class="bi-plus-circle me-2"></i>Agregar Nuevo Registro
                    </a>
                </div>
                <div class="card-body">
                    <table id="model-datatables" class="table table-bordered nowrap table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nombre</th>
                                <th>Capacidad</th>
                                
                                @role('super-admin')
                                    <th>Action</th>
                                @endrole
                            </tr>
                        </thead>
                        <tbody>
                            <?php $cont = 0; ?>
                            @foreach ($aulas as $aula)
                                <?php $cont = $cont + 1; ?>
                                <tr>
                                    <td>{{ $cont }}</td>
                                    <td>{{ $aula->nombre }}</td>
                                    <td>{{ $aula->capacidad }}</td>
                                    @role('super-admin')
                                        <td>
                                          
                                            <a href="{{route('aulas.edit', $aula->id)}}"  class="link-warning editIcon"><i
                                                    class="ri-edit-2-fill"></i></a>
                                            <a href="{{route('aulas.show', $aula->id)}}" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                        </td>
                                    @endrole
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    {{-- <script>
        let id;
        // Agregar nueva solicitud AJAX de usuario
        $("#add_user_form").submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);
            $("#add_user_btn").text('Registrando...');
            $.ajax({
                url: '{{ route('usuario.store') }}',
                method: 'post',
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status == 200) {
                        Swal.fire(
                            'Agregado!',
                            'Registro Exitoso!',
                            'success'
                        )
                        fetchAllEmployees();
                    }
                    $("#add_user_btn").text('Agregar');
                    $("#add_user_form")[0].reset();
                    $("#addUserModal").modal('hide');
                }
            });
        });

  
    </script> --}}
@endsection
