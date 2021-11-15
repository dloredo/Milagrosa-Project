@extends('layouts.layout')

@section('main')
<div class="row">
   <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Empleados</h2>
            <button type="button" class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#largeModal">
                <i class="zmdi zmdi-plus"></i>Agregar empleado</button>
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
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Fecha de inicio</th>
                        <th>Prestamo</th>
                        <th>Activo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $empleado)
                        <tr>
                            <td>{{ $empleado->id }}</td>
                            <td>{{ $empleado->nombres }}</td>
                            <td>{{ $empleado->telefono }}</td>
                            <td>{{ $empleado->direccion }}</td>
                            <td>{{ $empleado->fecha_inicio }}</td>
                            <td>{{ $empleado->prestamo }}</td>
                            <td>
                                @if($empleado->estatus == 1)
                                    <span class="badge badge-success">Activo</span>
                                @else
                                    <span class="badge badge-warning">Inactivo</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('empleados_delete') }}" class="btn btn-danger">Eliminar</a>
                                @if($empleado->estatus == 1)
                                    <a href="{{ route("empleados_estatus" , $empleado->id) }}" class="btn btn-warning">Inactivar</a>
                                @else
                                    <a href="{{ route("empleados_estatus" , $empleado->id) }}" class="btn btn-success">Activar</a>
                                @endif
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
                <h5 class="modal-title" id="largeModalLabel">Agregar empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <form action="{{ route("empleados_store") }}" method="POST" id="formAgregarEmpleado">
                        @csrf
                        <div class="form-group">
                            <label for="nombres" class="form-control-label">Nombre</label>
                            <input type="text" id="nombres" name="nombres" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="telefono" class="form-control-label">Telefono</label>
                            <input type="number" id="telefono" name="telefono" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="direccion" class="form-control-label">Direccion</label>
                            <input type="text" id="direccion" name="direccion" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button type="button" onclick="document.getElementById('formAgregarEmpleado').submit()" class="btn btn-success">Agregar empleado</button>
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