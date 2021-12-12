@extends('layouts.layout')

@section('main')
<div class="row">
   <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Ventas</h2>
            <a href="{{ route("view_pre_venta") }}" type="button" class="au-btn au-btn-icon au-btn--blue">
                <i class="zmdi zmdi-plus"></i>Agregar venta</a>
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
                        <th>Duracion</th>
                        <th>Costo</th>
                        <th>Estatus</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>    
                </tbody>
            </table>
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