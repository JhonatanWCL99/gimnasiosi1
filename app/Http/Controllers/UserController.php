<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Persona;
use GrahamCampbell\ResultType\Success;

class UserController extends Controller
{
    public function mostrarUsers()
    {
        $users =User::paginate(5);
        return view('users.index', compact('users'));
    }

    public function mostrarCrearUser()
    {
        return view('users.create');
    }

    public function guardar(Request $request)
    {
        $persona=Persona::create($request->all());

        $administrador=Administrador::create($request->only('tipo_administrador',$persona->id));

        $user=User::create($request->only('name', 'email')
        +[
            'password' => bcrypt($request->input('password')),
        ]+($administrador->id));
        return redirect()->route('users.show', $user->id)->with('success', 'Usuario creado correctamente');
    }

    public function mostrarUser(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function mostrarUseredit(User $user)
    {
        return view('users.edit', compact('user'));
    }
    
    public function update(Request $request, User $user)
    {
        $data = $request->only('nombre', 'apellido','fecha_nacimiento','carnet_identidad','correo','telefono', 'name');
        $password=$request->input('password');
        if($password)
            $data['password'] = bcrypt($password);
        $user->update($data);
        return redirect()->route('users.show', $user->id)->with('success', 'Usuario actualizado correctamente');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success','Usuario eliminado correctamente');
    }
}
