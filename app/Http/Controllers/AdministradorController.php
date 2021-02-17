<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Administrador;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AdministradorController extends Controller
{
    public function index()
    {
        $administradores =Administrador::paginate(5);
        return view('administradores.index', compact('administradores'));
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
            'password' => ['required']
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
            
            $administrador = Administrador::create([
                'tipo_instructor' => $request['tipo_instructor'],
                'persona_id' => $persona->id,
            ]); 

            $user = User::create([
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'persona_id' => $administrador->id,
            ]);
            
            return redirect()->route('administradores.show', $user->id)->with('success', 'Administrador creado correctamente');
        }else{
            return response()->json(['status_code'=>400,'message'=>$validator->errors()]);
        }  
    }

    public function mostrarAdministrador(Administrador $administrador)
    {
        return view('administradores.show', compact('administrador'));
    }

    public function mostrarAdministradoredit(Administrador $administrador)
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
