<?php

namespace App\Http\Controllers;

use App\ProductosServicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosServiciosController extends Controller
{
    public function store(Request $request)
    {
        request()->validate([
            'nombre'    => 'required',
            'precio'    => 'required',
            'tipo'      => 'required',
            'duracion'  => 'required',
            'stock'     => 'required',
        ]);
        DB::beginTransaction();
        try{
            ProductosServicios::create([
                'nombre'    => $request->nombre,
                'precio'    => $request->precio,
                'tipo'      => $request->tipo,
                'duracion'  => $request->duracion,
                'stock'     => $request->stock ,
                'estatus'   => 1,
            ]);
            DB::commit();
        }catch(\Exception $e){
            DB::rollback();
            dd($e);
        }
        return back();
    }
}
