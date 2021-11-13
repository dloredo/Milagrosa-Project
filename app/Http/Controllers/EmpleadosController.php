<?php

namespace App\Http\Controllers;

use App\Empleados;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpleadosController extends Controller
{
    public function index()
    {
        $data["empleados"] = Empleados::all();
        return view('empleados' , $data);
    }

    public function store(Request $request)
    {
        request()->validate([
            'nombres' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
        ]);
        DB::beginTransaction();
        try{
            Empleados::create([
                'nombres' => $request->nombres,
                'telefono' => $request->telefono,
                'direccion' => $request->direccion ,
                'fecha_inicio' => Carbon::now()->format('Y-m-d'),
                'prestamo' => 0,
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
