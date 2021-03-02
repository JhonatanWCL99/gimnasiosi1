<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Administrador;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AdministradorController extends Controller
{
    public function index()
    {
       // $administradores =Administrador::paginate(5);
        return view('administradores.index');
    }

    public function create()
    {
        return view('administradores.create');
    }
    
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
            'apellido' =>  ['required'],
           // 'fecha_nacimiento' =>  ['required'],
            'carnet_identidad' =>  ['required'],
            'telefono' =>  ['required'],
            'tipo_administrador' =>  ['required']
        ]);
        if(!$validator->fails()) {
            
            $persona = Persona::create([
                'nombre' => $request['name'],
                'apellido' => $request['apellido'],
                'fecha_nacimiento' => Carbon::now('America/La_Paz')->toDateString(),
                'carnet_identidad' => $request['carnet_identidad'],
                'correo' => $request['email'],
                'telefono' => $request['telefono'],
            ]);
            
            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'persona_id' => $persona->id,
            ]);

            $administrador = Administrador::create([
                'tipo_administrador' => $request['tipo_administrador'],
                'persona_id' => $persona->id,
            ]); 

            
            
            return redirect()->route('administradores.show', $administrador->id)->with('success', 'Administrador creado correctamente');
        }else{
            return response()->json(['status_code'=>400,'message'=>$validator->errors()]);
        }  
    }

    public function show(Administrador $administrador)
    {
        return view('administradores.show', compact('administrador'));
    }

    public function edit(Administrador $administrador)
    {
        return view('administradores.edit', compact('administrador'));
    }
    
    public function update(Request $request, Administrador $administrador)
    {
        $data = $request->only('nombre', 'apellido','fecha_nacimiento','carnet_identidad','correo','telefono', 'tipo_administrador');
        $password=$request->input('password');
        if($password)
            $data['password'] = bcrypt($password);
        $administrador->update($data);
        return redirect()->route('administradores.show', $administrador->id)->with('success', 'Administrador actualizado correctamente');
    }

    public function destroy(Administrador $administrador)
    {
        $administrador->delete();
        return back()->with('success','administrador eliminado correctamente');
    }

}
