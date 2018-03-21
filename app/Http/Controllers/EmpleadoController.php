<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\Turno;
use App\Departamento;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $empleados = Empleado::paginate(5);
        return view('empleados.index',['empleado'=>$empleados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $empleado = "Hola";
        $sexos = array('HOMBRE' => 'HOMBRE',
                        'MUJER' => 'MUJER');

        $turnos = Turno::all()->pluck('descripcion','id');
        $departamentos = Departamento::all()->pluck('descripcion','id');
        return view('empleados.create',['empleado' => $empleado, 'sexos' => $sexos, 'turnos' => $turnos, 'departamento' => $departamentos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->toArray());
        $validateData = $request->validate([
            'matricula' => 'required',
            'paterno' => 'required',
            'materno' => 'required',
            'nombre' => 'required',
            'fecha_nacimiento' => 'required',

        ]);
//dd($request->toArray());
        //$empleado = new Empleado($request->all());

        $empleado = new Empleado();
        
        $empleado->matricula = $request->input('matricula');
        $empleado->paterno = $request->input('paterno');
        $empleado->materno = $request->input('materno');
        $empleado->nombre = $request->input('nombre');
        $empleado->fecha_nacimiento = $request->input('fecha_nacimiento');
        $empleado->sexo = $request->input('sexo');
        $empleado->id_turno = $request->input('id_turno');
        $empleado->id_departamento = $request->input('id_departamento');


        $empleado->save();        


        return $this->index();


        //---------------------------
        /*$empleado = new Empleado;

        $empleado->matricula = $request->input['matricula'];
        $empleado->paterno = $request->input['paterno'];
        $empleado->materno = $request->input['materno'];
        $empleado->nombre = $request->input['nombre'];

        $empleado->save();*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
            $empleado = Empleado::find($id);
        $sexos = array('HOMBRE' => 'HOMBRE',
                        'MUJER' => 'MUJER');

        $turnos = Turno::all()->pluck('descripcion','id');
        $departamentos = Departamento::all()->pluck('descripcion','id');
        return view('empleados.edit',['empleado' => $empleado, 'sexos' => $sexos, 'turnos' => $turnos, 'departamento' => $departamentos]);

        

        //return view('empleados.edit',['empleado'=>$empleado]);

        //return view('empleados.edit',compact('empleado','sexo','turnos','departamentos'))
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $empleado =  Empleado::find($id);
        
        $empleado->matricula = $request->input('matricula');
        $empleado->paterno = $request->input('paterno');
        $empleado->materno = $request->input('materno');
        $empleado->nombre = $request->input('nombre');
        $empleado->fecha_nacimiento = $request->input('fecha_nacimiento');
        $empleado->sexo = $request->input('sexo');
        $empleado->id_turno = $request->input('id_turno');
        $empleado->id_departamento = $request->input('id_departamento');


        $empleado->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $empleado =  Empleado::find($id);

        $empleado->delete();

        return $this->index();
    }
}
