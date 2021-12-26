<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\PreVenta;
use App\Productos;
use App\ProductosServicios;
use App\Servicios;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function index()
    {
        return view('ventas');
    }

    public function pre_venta()
    {
        $data["servicios"] = ProductosServicios::where("estatus" , 1)->where("tipo" , "Servicio")->get();
        $data["productos"] = ProductosServicios::where("estatus" , 1)->where("tipo" , "Producto")->get();
        $data["clientes"] = Clientes::all();

        $data["pre_venta"] = PreVenta::join("productos_servicios" , "id_producto_servicio" , "productos_servicios.id")
        ->get();
        return view("ventas.pre_venta", $data);
    }

    public function agregarProductoServicio($id)
    {
        $producto = ProductosServicios::find($id);
        $pre_venta = PreVenta::where("id_producto_servicio" , $id)->first();
        if(isset($pre_venta)){
            $pre_venta->cantidad += 1;
            $pre_venta->save();
        }else{
            PreVenta::create([
                "id_producto_servicio" => $producto->id,
                "cantidad" => 1,
            ]); 
        }
        
        return back();
    }

    public function updateCantidad($id, Request $request)
    {
        $pre_venta = PreVenta::where("id_producto_servicio" , $id)->first();
        $pre_venta->update([
            'cantidad'    => $request['cantidad'],
        ]);
        return back();
    }

    public function deleteProductoServicio($id)
    {
        $pre_venta = PreVenta::where("id_producto_servicio" , $id)->first();
        $pre_venta->delete();
        return back();
    }
}
