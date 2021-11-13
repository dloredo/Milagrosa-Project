@extends('layouts.layout')

@section('main')
<div class="row">
   <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Clientes</h2>
            <button type="button" class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#largeModal">
                <i class="zmdi zmdi-plus"></i>Agregar cliente</button>
            </button>
        </div>
    </div> 
</div>
<div class="row m-t-25"">
    <div class="col-lg-12">
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nombre</th>
                        <th>Fecha de nacimiento</th>
                        <th>Edad</th>
                        <th>Telefono</th>
                        <th>Sexo</th>
                        <th>Enfermedad</th>
                        <th>Saldo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->id }}</td>
                            <td>{{ $cliente->nombres }}</td>
                            <td>{{ $cliente->fecha_nacimiento }}</td>
                            <td>{{ $cliente->edad }}</td>
                            <td>{{ $cliente->telefono }}</td>
                            <td>{{ $cliente->sexo }}</td>
                            <td>{{ $cliente->enfermedad }}</td>
                            <td>${{ $cliente->saldo }}</td>
                            <td>
                                <a href="" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('modals')
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Agregar cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <form action="{{ route("clientes_store") }}" method="POST" id="formAgregarCliente">
                        @csrf
                        <div class="form-group">
                            <label for="nombres" class="form-control-label">Nombre</label>
                            <input type="text" id="nombres" name="nombres" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="edad" class=" form-control-label">Edad</label>
                            <input type="number" id="edad" name="edad" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="fecha_nacimiento" class=" form-control-label">Fecha de nacimiento</label>
                            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="telefono" class=" form-control-label">Telefono</label>
                            <input type="number" id="telefono" name="telefono" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="sexo" class=" form-control-label">Sexo</label>
                            <select name="sexo" id="sexo" class="form-control">
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="enfermedad" class=" form-control-label">Enfermedad</label>
                            <input type="text" id="enfermedad" name="enfermedad" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button type="button" onclick="document.getElementById('formAgregarCliente').submit()" class="btn btn-success">Agregar cliente</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
    
@endsection


@section('scripts')

    <script>
 
    </script>

@endsection