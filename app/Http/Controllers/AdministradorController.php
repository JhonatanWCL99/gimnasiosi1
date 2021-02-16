<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Administrador;

class AdministradorController extends Controller
{
    public function mostrarAdmis()
    {
        $administradores =Administrador::paginate(5);
        return view('administradores.index', compact('administradores'));
    }

    public function mostrarCrearAdmi()
    {
        return view('administradores.create');
    }

    public function guardar(Request $request)
    {
        $persona=Persona::create($request->all());

        $administrador=Administrador::create($request->only('tipo_administrador',$persona->id));

        return redirect()->route('administradores.show', $administrador->id)->with('success', 'Administrador creado correctamente');
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
        $administrador->update($data);
        return redirect()->route('administradores.show', $administrador->id)->with('success', 'Administrador actualizado correctamente');
    }

    public function destroy(Administrador $administrador)
    {
        $administrador->delete();
        return back()->with('success','administrador eliminado correctamente');
    }

}
