<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Cliente;
use Illuminate\Support\Facades\Validator;


class ClienteController extends Controller
{
    public function index()
    {
        $cliente =Cliente::paginate(5);
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
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
            
            $cliente = Cliente::create([
                'antiguedad' => $request['antiguedad'],
                'persona_id' => $persona->id,
            ]); 
            
            return redirect()->route('clientes.show', $cliente->id)->with('success', 'Cliente creado correctamente');
        }else{
            return response()->json(['status_code'=>400,'message'=>$validator->errors()]);
        }  
    }

    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }
    
    public function update(Request $request, Cliente $cliente)
    {
        $validator=Validator::make($request->all(), [
            'nombre' => ['required', 'string',  ],
            'correo' => ['required', 'string', 'email', 'max:255', 'unique:users']
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        $data = $request->only('nombre', 'apellido','fecha_nacimiento','carnet_identidad','correo','telefono', 'antiguedad');
        $cliente->update($data);
        return redirect()->route('clientes.show', $cliente->id)->with('success', 'Cliente actualizado correctamente');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return back()->with('success','cliente eliminado correctamente');
    }
}
