<?php

namespace App\Http\Controllers;

use App\Models\calificacione;
use Illuminate\Http\Request;
use App\Models\persona;
use Illuminate\Support\Facades\Auth;


class calificarController extends Controller
{

    public function calificar(Request $request){
        $idUser = Auth::user()->id;

        $persona = new Persona();
        $data = $persona->all()->where('usuarios_id', $idUser)->first();

        $calificacione = new calificacione();

        $calificacione->comentario = $request->comentario;
        $calificacione->indice = $request->estrellas;
        $calificacione->productos_id = $request->idProducto;
        $calificacione->personas_id = $data->id;

        $calificacione->save();

        return redirect()->route('shop.index');
    }
}
