<?php

namespace App\Http\Controllers;

use App\Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriasController extends Controller
{
    public function index()
    {
        $data["categorias"] = Categorias::all();
        return view("categorias" , $data);
    }

    public function store(Request $request)
    {
        request()->validate([
            'nombre' => 'required',
        ]);
        DB::beginTransaction();
        try{
            Categorias::create([
                'nombre' => $request->nombre,
                'estatus' => 1,
            ]);
            DB::commit();
        }catch(\Exception $e){
            DB::rollback();
            dd($e);
        }
        
        return back();
    }
}
