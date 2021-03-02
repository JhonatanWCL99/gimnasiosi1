@extends('layouts.main', ['activePage'=> 'users', 'titlePage' => 'Nuevo Cliente'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('clientes.store') }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Cliente</h4>
                            <p class="card-category">Ingresar Datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="carnet_identidad" class="col-sm-2 col-form-label">Carnet de Identidad</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="carnet_identidad" placeholder="Ingrese su numero de carnet de identidad" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">Correo</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email" placeholder="Ingrese su correo">
                                </div>
                            </div>
                            <div class="row">
                                <label for="edad" class="col-sm-2 col-form-label">Fecha Nacimiento</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="edad" placeholder="Ingrese su edad">
                                </div>
                            </div>
                            <div class="row">
                                <label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="sexo" placeholder="Ingrese su sexo">
                                </div>
                            </div>
                            <div class="row">
                                <label for="nro_telefono" class="col-sm-2 col-form-label">Telefono</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="nro_telefono" placeholder="Ingrese su nro de telefono">
                                </div>
                            </div>
                            <div class="row">
                                <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" name="password" placeholder="Contraseña">
                                </div>
                            </div>
                        </div>
                        <!--Footer-->
                        <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        <!--End footer-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection