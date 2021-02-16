<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function mostrarClientes()
    {
        $cliente =Cliente::paginate(5);
        return view('clientes.index', compact('clientes'));
    }

    public function mostrarCrearCliente()
    {
        return view('clientes.create');
    }

    public function guardar(Request $request)
    {
        $persona=Persona::create($request->all());

        $cliente=Cliente::create($request->only('antiguedad',$persona->id));

        return redirect()->route('clientes.show', $cliente->id)->with('success', 'Cliente creado correctamente');
    }

    public function mostrarCliente(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    public function mostrarClienteedit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }
    
    public function update(Request $request, Cliente $cliente)
    {
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
