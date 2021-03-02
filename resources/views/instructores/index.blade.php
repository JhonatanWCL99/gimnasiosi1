@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Instructores'])
@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Instructor</h4>
                    <p class="card-category">Instructores registrados</p>
                  </div>
                  <div class="card-body">
                   <!-- @if (session('success'))
                    <div class="alert alert-success" role="success">
                      {{ session('success') }}
                    </div>
                    @endif
                    -->
                    <div class="row">
                      <div class="col-12 text-right">
                        <a href="{{ route('instructores.create') }}" class="btn btn-sm btn-facebook">Añadir Instructor</a>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary">
                          <th>Ci</th>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Correo</th>
                          <th>Fecha Nacimiento</th>
                          <th>Telefono</th>
                          <th>Sexo</th>
                          <th class="text-right">Acciones</th>
                        </thead>
                        <tbody >

                               <!-- esto es la base de datos depende a sus atributos -->
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                    <div class="card-footer mr-auto">
                      
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection