<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Productos;
use App\Servicios;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function index()
    {
        return view('ventas');
    }

    public function pre_venta(Request $request)
    {
        $data["servicios"] = Servicios::where("estatus", 1)->get();
        $data["productos"] = Productos::where("estatus", 1)->get();
        $data["clientes"] = Clientes::all();
        return view("ventas.pre_venta", $data);
    }

    public function agregarProducto(Request $request)
    {

        return back();
    }

    public function agregarServicio(Request $request)
    {
        
        return back();
    }
}
