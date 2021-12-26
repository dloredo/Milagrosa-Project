@extends('layouts.layout')

@section('main')
<div class="row">
   <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Venta</h2>
            <button type="button" class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#ModalProductos">
                <i class="zmdi zmdi-plus"></i>Agregar producto</button>
            </button>
            <button type="button" class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#ModalServicios">
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
                    <tr style="text-align: center">
                        <th>Articulo</th>
                        <th>Precio</th>
                        <th style="width:13%;">Cantidad</th>
                        <th>Tipo</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                @php
                    $total = 0;
                @endphp
                <tbody>
                    @foreach ($pre_venta as $pre_venta)
                        <tr style="text-align: center">
                            <td>{{ $pre_venta->nombre }}</td>
                            <td>${{ $pre_venta->precio }}</td>
                            <td style="text-align: center;">
                                <form action="{{ route("updateCantidad" , $pre_venta->id)}}" method="post">
                                @csrf
                                    <div class="input-group mb-4">
                                        <input style="text-align: center;" class="form-control" type="number" name="cantidad" id="cantidad" value="{{ $pre_venta->cantidad }}">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="submit"> <i class="fa fa-refresh"></i> </button>
                                        </div>
                                    </div>
                                </form>  
                            </td>
                            <td>{{ $pre_venta->tipo }}</td>
                            <td>${{ $pre_venta->precio * $pre_venta->cantidad }}</td>
                            <td>
                                <a href="{{ route("deleteProductoServicio" , $pre_venta->id) }}" type="button" class="btn btn-danger">X</a>
                            </td>
                            @php
                                $total +=  $pre_venta->precio * $pre_venta->cantidad;
                            @endphp
                        </tr>      
                    @endforeach
                      
                </tbody>
            </table>
        </div>
    </div>
</div>
<div style="float: right;">
   <div class="card" style="width: 14rem;">
        <ul>
            <li class="list-group-item d-flex justify-content-between align-items-center">Total:    <span>{{ "$" . number_format(round(((float)$total)),0,'.',',') }}</span></li>
            
        </ul>
    </div> 
    <div style="text-align: right;">
        <button class="btn btn-success" data-toggle="modal" data-target="#ModalGenerarRecibo">Generar recibo</button>
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
                                            <a href="{{ route("agregarProductoServicio" , $servicio->id) }}" type="button" class="btn btn-success">Agregar</a>
                                        </td>
                                        <td>{{ $servicio->nombre }}</td>
                                        <td>${{ $servicio->precio }}</td>
                                    </tr>     
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
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
                    <div class="table-responsive table--no-card m-b-40">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Productos</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $producto)
                                    <tr>
                                        <td>
                                            <a href="{{ route("agregarProductoServicio" , $producto->id) }}" type="button" class="btn btn-success">Agregar</a>
                                        </td>
                                        <td>{{ $producto->nombre }}</td>
                                        <td>${{ $producto->precio }}</td>
                                    </tr>     
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalGenerarRecibo" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Generar recibo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <form action="" method="POST" id="formGenerarRecibo">
                        <select class="form-control" name="id_cliente" id="id_cliente">
                            <option value="">Seleccione</option>
                            @foreach ($clientes as $cliente)
                                <option value="{{$cliente->id}}">{{$cliente->nombres}}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-success" onclick="document.getElementById('formGenerarRecibo').submit()">Generar recibo</button>
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