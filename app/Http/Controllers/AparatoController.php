<?php

namespace App\Http\Controllers;

use App\Models\Aparato;
use Illuminate\Http\Request;

class AparatoController extends Controller
{
    public function index()
    {
        $aparatos=Aparato::paginate(5);
        /*  $categorias=$categorias->distinct()->get(); */
         return view('aparatos.index', compact('aparatos'));
    }

    public function create()
    {
        return view('aparatos.create');
    }
}
