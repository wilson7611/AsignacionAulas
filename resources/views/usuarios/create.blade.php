
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalgridLabel">Nuevo Registro</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    <form id="add_employee_form" method="POST" >
        @csrf
    <div class="row g-3">
        <div class="col-xxl-12">
            <div>
                <label for="firstName" class="form-label">Nombre Completo</label>
                <input type="text" name="name" class="form-control" id="firstName" placeholder="Introducir Nombre">
            </div>
        </div><!--end col-->
        {{-- <div class="col-xxl-6">
            <div>
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" placeholder="Enter lastname">
            </div>
        </div><!--end col--> --}}
        {{-- <div class="col-lg-12">
            <label for="genderInput" class="form-label">Gender</label>
            <div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                    <label class="form-check-label" for="inlineRadio3">Others</label>
                </div>
            </div>
        </div><!--end col--> --}}
        <div class="col-xxl-12">
            <div>
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="emailInput" placeholder="Introducir email">
            </div>
        </div><!--end col-->
        <div class="col-xxl-12">
            <div>
                <label for="passwordInput" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="passwordInput" value="" placeholder="Introducir Password">
            </div>
        </div><!--end col-->
        <div class="col-xxl-12">
            <div>
                <label for="passwordInput" class="form-label">Rol</label>
                <select type="text" name="rol" class="form-select" id="passwordInput" value="">
                    <option value="">Elije un rol</option>
                    @foreach ($roles as $key => $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                  @endforeach
                </select>
            </div>
        </div><!--end col-->
        <div class="col-lg-12">
            <div class="hstack gap-2 justify-content-end">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                <button id="add_user_btn"  type="submit" class="btn btn-success">Registrar</button>
            </div>
        </div><!--end col-->
    </div><!--end row-->
    </form>
    </div>
    </div>
    </div>
    </div>