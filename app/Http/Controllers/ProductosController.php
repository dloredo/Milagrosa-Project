<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\Productos;
use App\ProductosServicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    public function index()
    {
        $data["productos"] = ProductosServicios::where("estatus" , 1)->where("tipo" , "Producto")->get();
        return view("productos" , $data);
    }

    public function store(Request $request)
    {
        request()->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'stock' => 'required',
            'id_categoria' => 'required',
        ]);
        DB::beginTransaction();
        try{
            Productos::create([
                'nombre' => $request->nombre,
                'precio' => $request->precio,
                'stock' => $request->stock ,
                'estatus' => 1,
                'id_categoria' => $request->id_categoria,
            ]);
            DB::commit();
        }catch(\Exception $e){
            DB::rollback();
            dd($e);
        }
        
        return back();
    }
}
