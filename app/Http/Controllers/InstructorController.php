<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Instructor;

class InstructorController extends Controller
{
    public function mostrarInstructores()
    {
        $instructores =Instructor::paginate(5);
        return view('instructores.index', compact('instructores'));
    }

    public function mostrarCrearInstructor()
    {
        return view('instructores.create');
    }

    public function guardar(Request $request)
    {
        $persona=Persona::create($request->all());

        $instructor=Instructor::create($request->only('tipo_instructor',$persona->id));

        return redirect()->route('instructores.show', $instructor->id)->with('success', 'Instructor creado correctamente');
    }

    public function mostrarAdministrador(Instructor $instructor)
    {
        return view('instructores.show', compact('instructor'));
    }

    public function mostrarAdministradoredit(Instructor $instructor)
    {
        return view('instructores.edit', compact('instructor'));
    }
    
    public function update(Request $request, Instructor $instructor)
    {
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
