<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    public function index()
    {
        $data["productos"] = Productos::select("productos.*" ,"categorias.nombre as categoria")
        ->join("categorias" , "productos.id_categoria" , "categorias.id")
        ->get();
        $data["categorias"] = Categorias::where("estatus" , 1)->get();
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
