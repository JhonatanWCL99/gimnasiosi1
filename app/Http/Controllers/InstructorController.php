<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Instructor;
use Illuminate\Support\Facades\Validator;

class InstructorController extends Controller
{
    public function index()
    {
        $instructores =Instructor::paginate(5);
        return view('instructores.index', compact('instructores'));
    }

    public function create()
    {
        return view('instructores.create');
    }

    public function store(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'nombre' => ['required', 'string',  ],
            'correo' => ['required', 'string', 'email', 'max:255', 'unique:users']
        ]);
        if(!$validator->fails()) {

            $persona = Persona::create([
                'nombre' => $request['nombre'],
                'apellido' => $request['apellido'],
                'fecha_nacimiento' => $request['fecha_nacimiento'],
                'carnet_identidad' => $request['carnet_identidad'],
                'correo' => $request['correo'],
                'telefono' => $request['telefono'],
            ]);
            
            $instructor = Instructor::create([
                'tipo_instructor' => $request['tipo_instructor'],
                'persona_id' => $persona->id,
            ]); 
            
            return redirect()->route('instructores.show', $instructor->id)->with('success', 'instructor creado correctamente');
        }else{
            return response()->json(['status_code'=>400,'message'=>$validator->errors()]);
        }  
    }

    public function show(Instructor $instructor)
    {
        return view('instructores.show', compact('instructor'));
    }

    public function edit(Instructor $instructor)
    {
        return view('instructores.edit', compact('instructor'));
    }
    
    public function update(Request $request, Instructor $instructor)
    {   
        $validator=Validator::make($request->all(), [
            'nombre' => ['required', 'string',  ],
            'correo' => ['required', 'string', 'email', 'max:255', 'unique:users']
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        $data = $request->only('nombre', 'apellido','fecha_nacimiento','carnet_identidad','correo','telefono', 'tipo_instructor');
        $instructor->update($data);
        return redirect()->route('instructores.show', $instructor->id)->with('success', 'instructor actualizado correctamente');
    }

    public function destroy(Instructor $instructor)
    {
        $instructor->delete();
        return back()->with('success','instructor eliminado correctamente');
    }
}
