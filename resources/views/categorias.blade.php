@extends('layouts.layout')

@section('main')
<div class="row">
   <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Categorias</h2>
            <button type="button" class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#largeModal">
                <i class="zmdi zmdi-plus"></i>Agregar categoria</button>
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
                        <th>Activo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->id }}</td>
                            <td>{{ $categoria->nombre }}</td>
                            <td>
                                @if($categoria->estatus == 1)
                                    <span class="badge badge-success">Activo</span>
                                @else
                                    <span class="badge badge-warning">Inactivo</span>
                                @endif
                            </td>
                            <td>
                                <a href="" class="btn btn-danger">Eliminar</a>
                                @if($categoria->estatus == 1)
                                    <a href="" class="btn btn-warning">Inactivar</a>
                                @else
                                    <a href="" class="btn btn-success">Activar</a>
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
                <h5 class="modal-title" id="largeModalLabel">Agregar categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <form action="{{ route("categorias_store") }}" method="POST" id="formAgregarEmpleado">
                        @csrf
                        <div class="form-group">
                            <label for="nombre" class="form-control-label">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button type="button" onclick="document.getElementById('formAgregarEmpleado').submit()" class="btn btn-success">Agregar categoria</button>
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