<?php

namespace App\Http\Controllers;

use App\Models\Casillero;
use Illuminate\Http\Request;

class CasillerController extends Controller
{
    public function index()
    {
        $casilleros=Casillero::paginate(5);
        /*  $categorias=$categorias->distinct()->get(); */
         return view('casilleros.index', compact('casilleros'));
    }

    public function create()
    {
        return view('casilleros.create');
    }

}
