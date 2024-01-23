@extends('layouts.app')

@section('contenido')
<div class="row">
  <div class="col-xl-3 col-md-6">
      <!-- card -->
      <div class="card card-animate bg-primary">
          <div class="card-body">
              <div class="d-flex align-items-center">
                  <div class="flex-grow-1 overflow-hidden">
                      <p
                          class="text-uppercase fw-bold text-white-50 text-truncate mb-0">
                          Aulas</p>
                  </div>
                  <div class="flex-shrink-0">
                      <h5 class="text-white fs-14 mb-0">
                          <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                          
                      </h5>
                  </div>
              </div>
              <div class="d-flex align-items-end justify-content-between mt-4">
                  <div>
                      <h4 class="fs-22 fw-bold ff-secondary text-white mb-4">Total: <span
                              class="counter-value" data-target=""></span>
                      </h4>
                      <a href="" class="text-decoration-underline text-white-50">Ver</a>
                  </div>
                  <div class="avatar-sm flex-shrink-0">
                      <span class="avatar-title bg-soft-light rounded fs-3">
                          <i class="bx bx-dollar-circle text-white"></i>
                      </span>
                  </div>
              </div>
          </div><!-- end card body -->
      </div><!-- end card -->
  </div><!-- end col -->

  <div class="col-xl-3 col-md-6">
      <!-- card -->
      <div class="card card-animate bg-secondary">
          <div class="card-body">
              <div class="d-flex align-items-center">
                  <div class="flex-grow-1 overflow-hidden">
                      <p
                          class="text-uppercase fw-bold text-white-50 text-truncate mb-0">
                          Estudiantes</p>
                  </div>
                  <div class="flex-shrink-0">
                      <h5 class="text-white fs-14 mb-0">
                          <i class="ri-arrow-right-down-line fs-13 align-middle"></i>
                          
                      </h5>
                  </div>
              </div>
              <div class="d-flex align-items-end justify-content-between mt-4">
                  <div>
                      <h4 class="fs-22 fw-bold ff-secondary text-white mb-4">Total: <span
                              class="counter-value" data-target=""></span></h4>
                      <a href="" class="text-decoration-underline text-white-50">Ver</a>
                  </div>
                  <div class="avatar-sm flex-shrink-0">
                      <span class="avatar-title bg-soft-light rounded fs-3">
                          <i class="bx bx-shopping-bag text-white"></i>
                      </span>
                  </div>
              </div>
          </div><!-- end card body -->
      </div><!-- end card -->
  </div><!-- end col -->

  <div class="col-xl-3 col-md-6">
      <!-- card -->
      <div class="card card-animate bg-success">
          <div class="card-body">
              <div class="d-flex align-items-center">
                  <div class="flex-grow-1 overflow-hidden">
                      <p
                          class="text-uppercase fw-bold text-white-50 text-truncate mb-0">
                          Turnos</p>
                  </div>
                  <div class="flex-shrink-0">
                      <h5 class="text-white fs-14 mb-0">
                          <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                          
                      </h5>
                  </div>
              </div>
              <div class="d-flex align-items-end justify-content-between mt-4">
                  <div>
                      <h4 class="fs-22 fw-bold ff-secondary text-white mb-4">Total: <span
                              class="counter-value" data-target=""></span>
                      </h4>
                      <a href="" class="text-decoration-underline text-white-50">Ver
                          </a>
                  </div>
                  <div class="avatar-sm flex-shrink-0">
                      <span class="avatar-title bg-soft-light rounded fs-3">
                          <i class="bx bx-user-circle text-white"></i>
                      </span>
                  </div>
              </div>
          </div><!-- end card body -->
      </div><!-- end card -->
  </div><!-- end col -->

  <div class="col-xl-3 col-md-6">
      <!-- card -->
      <div class="card card-animate bg-info">
          <div class="card-body">
              <div class="d-flex align-items-center">
                  <div class="flex-grow-1 overflow-hidden">
                      <p
                          class="text-uppercase fw-bold text-white-50 text-truncate mb-0">
                          Asignaciones</p>
                  </div>
                  <div class="flex-shrink-0">
                      <h5 class="text-white fs-14 mb-0">
                          
                      </h5>
                  </div>
              </div>
              <div class="d-flex align-items-end justify-content-between mt-4">
                  <div>
                      <h4 class="fs-22 fw-bold ff-secondary text-white mb-4">Total: <span
                              class="counter-value" data-target=""></span>
                      </h4>
                      <a href=""
                          class="text-decoration-underline text-white-50">Ver</a>
                  </div>
                  <div class="avatar-sm flex-shrink-0">
                      <span class="avatar-title bg-soft-light rounded fs-3">
                          <i class="bx bx-wallet text-white"></i>
                      </span>
                  </div>
              </div>
          </div><!-- end card body -->
      </div><!-- end card -->
  </div><!-- end col -->
</div> <!-- end row-->
<br>
<br>

{{-- <div class="row">
  <div class="col-xl-3 col-md-6">
      <!-- card -->
      <div class="card card-animate bg-primary">
          <div class="card-body">
              <div class="d-flex align-items-center">
                  <div class="flex-grow-1 overflow-hidden">
                      <p
                          class="text-uppercase fw-bold text-white-50 text-truncate mb-0">
                          Especialidades</p>
                  </div>
                  <div class="flex-shrink-0">
                      <h5 class="text-white fs-14 mb-0">
                          <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                          
                      </h5>
                  </div>
              </div>
              <div class="d-flex align-items-end justify-content-between mt-4">
                  <div>
                      <h4 class="fs-22 fw-bold ff-secondary text-white mb-4">Total: <span
                              class="counter-value" data-target=""></span>
                      </h4>
                      <a href="" class="text-decoration-underline text-white-50">Ver</a>
                  </div>
                  <div class="avatar-sm flex-shrink-0">
                      <span class="avatar-title bg-soft-light rounded fs-3">
                          <i class="bx bx-dollar-circle text-white"></i>
                      </span>
                  </div>
              </div>
          </div><!-- end card body -->
      </div><!-- end card -->
  </div><!-- end col -->

  <div class="col-xl-3 col-md-6">
      <!-- card -->
      <div class="card card-animate bg-secondary">
          <div class="card-body">
              <div class="d-flex align-items-center">
                  <div class="flex-grow-1 overflow-hidden">
                      <p
                          class="text-uppercase fw-bold text-white-50 text-truncate mb-0">
                          Medicos</p>
                  </div>
                  <div class="flex-shrink-0">
                      <h5 class="text-white fs-14 mb-0">
                          <i class="ri-arrow-right-down-line fs-13 align-middle"></i>
                          
                      </h5>
                  </div>
              </div>
              <div class="d-flex align-items-end justify-content-between mt-4">
                  <div>
                      <h4 class="fs-22 fw-bold ff-secondary text-white mb-4">Total: <span
                              class="counter-value" data-target=""></span></h4>
                      <a href="" class="text-decoration-underline text-white-50">Ver</a>
                  </div>
                  <div class="avatar-sm flex-shrink-0">
                      <span class="avatar-title bg-soft-light rounded fs-3">
                          <i class="bx bx-shopping-bag text-white"></i>
                      </span>
                  </div>
              </div>
          </div><!-- end card body -->
      </div><!-- end card -->
  </div><!-- end col -->

  <div class="col-xl-3 col-md-6">
      <!-- card -->
      <div class="card card-animate bg-success">
          <div class="card-body">
              <div class="d-flex align-items-center">
                  <div class="flex-grow-1 overflow-hidden">
                      <p
                          class="text-uppercase fw-bold text-white-50 text-truncate mb-0">
                          Consultorios</p>
                  </div>
                  <div class="flex-shrink-0">
                      <h5 class="text-white fs-14 mb-0">
                          <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                          
                      </h5>
                  </div>
              </div>
              <div class="d-flex align-items-end justify-content-between mt-4">
                  <div>
                      <h4 class="fs-22 fw-bold ff-secondary text-white mb-4">Total: <span
                              class="counter-value" data-target=""></span>
                      </h4>
                      <a href="" class="text-decoration-underline text-white-50">Ver
                          </a>
                  </div>
                  <div class="avatar-sm flex-shrink-0">
                      <span class="avatar-title bg-soft-light rounded fs-3">
                          <i class="bx bx-user-circle text-white"></i>
                      </span>
                  </div>
              </div>
          </div><!-- end card body -->
      </div><!-- end card -->
  </div><!-- end col -->

  <div class="col-xl-3 col-md-6">
      <!-- card -->
      <div class="card card-animate bg-info">
          <div class="card-body">
              <div class="d-flex align-items-center">
                  <div class="flex-grow-1 overflow-hidden">
                      <p
                          class="text-uppercase fw-bold text-white-50 text-truncate mb-0">
                          Hora Atenciones</p>
                  </div>
                  <div class="flex-shrink-0">
                      <h5 class="text-white fs-14 mb-0">
                          
                      </h5>
                  </div>
              </div>
              <div class="d-flex align-items-end justify-content-between mt-4">
                  <div>
                      <h4 class="fs-22 fw-bold ff-secondary text-white mb-4">Total: <span
                              class="counter-value" data-target=""></span>
                      </h4>
                      <a href=""
                          class="text-decoration-underline text-white-50">Ver</a>
                  </div>
                  <div class="avatar-sm flex-shrink-0">
                      <span class="avatar-title bg-soft-light rounded fs-3">
                          <i class="bx bx-wallet text-white"></i>
                      </span>
                  </div>
              </div>
          </div><!-- end card body -->
      </div><!-- end card -->
  </div><!-- end col -->
</div> <!-- end row--> --}}
@endsection