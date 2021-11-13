<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    public function index()
    {
        $data["clientes"] = Clientes::all();
        return view('clientes' , $data);
    }

    public function store(Request $request)
    {
        request()->validate([
            'nombres' => 'required',
            'edad' => 'required',
            'fecha_nacimiento' => 'required',
            'telefono' => 'required',
            'sexo' => 'required',
            'enfermedad' => 'required',
        ]);
        DB::beginTransaction();
        try{
            Clientes::create([
                'nombres' => $request->nombres,
                'fecha_nacimiento' => $request->fecha_nacimiento,
                'edad' => $request->edad,
                'telefono' => $request->telefono,
                'sexo' => $request->sexo,
                'enfermedad' => $request->enfermedad,
                'saldo' => 0,
            ]);
            DB::commit();
        }catch(\Exception $e){
            DB::rollback();
            dd($e);
        }
        
        return back();
    }
}
