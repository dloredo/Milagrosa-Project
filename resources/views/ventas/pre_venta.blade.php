@extends('layouts.layout')

@section('main')
<div class="row">
   <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Venta</h2>
            <button type="button" class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#ModalProductos">
                <i class="zmdi zmdi-plus"></i>Agregar producto</button>
            </button>
            <button type="button" class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#ModalServicios ">
                <i class="zmdi zmdi-plus"></i>Agregar servicio</button>
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
                        <th>Articulo</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="" type="button" class="btn btn-danger">X</a>
                        </td>
                    </tr>    
                </tbody>
            </table>
        </div>
    </div>
</div>
@php
    $subtotal = 0;
    $total = 0; 
@endphp
<div style="float: right;">
   <div class="card" style="width: 14rem;">
        <ul>
            <li class="list-group-item d-flex justify-content-between align-items-center">Subtotal: <span><?php echo "$" . number_format(round(((float)$subtotal)),2,'.',',');?></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Impuesto: <span><?php echo "$" . number_format(round(((float)$subtotal)),2,'.',',');?></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Total:    <span><?php echo "$" . number_format(round(((float)$total)),2,'.',',');?></span></li>
            
        </ul>
    </div> 
    <div style="text-align: right;">
        <form action="" method="post">
        @csrf
            <input type="hidden" name="subtotal" value="{{ $subtotal }}">
            <input type="hidden" name="impuesto" value="{{ $subtotal }}">
            <input type="hidden" name="total" value="{{ $total }}">
            <input class="btn btn-success" type="submit" value="Generar recibo">
        </form>  
    </div>
    
</div>
@endsection

@section('modals')
<div class="modal fade" id="ModalServicios" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Servicios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="table-responsive table--no-card m-b-40">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Servicio</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($servicios as $servicio)
                                    <tr>
                                        <td>
                                            <a href="" type="button" class="btn btn-success">Agregar</a>
                                        </td>
                                        <td>{{ $servicio->nombre }}</td>
                                        <td>{{ $servicio->precio }}</td>
                                    </tr>     
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button type="button" onclick="document.getElementById('formAgregarCliente').submit()" class="btn btn-success">Agregar servicio</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalProductos" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Productos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button type="button" onclick="document.getElementById('formAgregarCliente').submit()" class="btn btn-success">Agregar producto</button>
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