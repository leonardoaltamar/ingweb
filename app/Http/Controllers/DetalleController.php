<?php

namespace App\Http\Controllers;

use App\Models\persona;
use Illuminate\Support\Facades\Auth;
use App\Models\venta;
use Illuminate\Http\Request;

class DetalleController extends Controller
{
    public function index()
    {
        $idUser = Auth::user()->id;
        $persona = new Persona();
        $venta = new Venta();
        $person = $persona->all()->where('usuarios_id', $idUser)->first();
        $ventas = $venta->all()->where('cliente_id',$person->id);
        return view('detalle.index', compact('ventas'));
    }
}
