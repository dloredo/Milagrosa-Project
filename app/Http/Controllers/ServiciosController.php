<?php

namespace App\Http\Controllers;

use App\Servicios;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiciosController extends Controller
{
    public function index()
    {
        $data["servicios"] = Servicios::all();
        return view('servicios' , $data);
    }
    public function store(Request $request)
    {
        request()->validate([
            'nombre' => 'required',
            'duracion' => 'required',
            'precio' => 'required',
        ]);
        DB::beginTransaction();
        try{
            Servicios::create([
                'nombre' => $request->nombre,
                'duracion' => $request->duracion,
                'precio' => $request->precio ,
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
