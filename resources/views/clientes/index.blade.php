@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Clientes'])
@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Cliente</h4>
                    <p class="card-category">Clientes registrados</p>
                  </div>
                  <div class="card-body">
                 <!--   @if (session('success'))
                    <div class="alert alert-success" role="success">
                      {{ session('success') }}
                    </div>
                    @endif
                    -->
                    <div class="row">
                      <div class="col-12 text-right">
                        <a href="{{ route('clientes.create') }}" class="btn btn-sm btn-facebook">Añadir Cliente</a>
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