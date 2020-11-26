<?php

namespace App\Http\Controllers;

use App\Models\persona;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class personControllers extends Controller
{
    public function addPerson(){
        return view('person.addPerson',);
    }

    public function add(Request $request){
        $person = new persona();
        $person->documento = $request->document;
        $person->nombres = $request->names;
        $person->apellidos = $request->lastnames;
        $person->direccion = $request->address;
        $person->telefono = $request->phone;
        $person->usuarios_id = $request->idUser;

        $person->save();
        $message = "A";

        view('home', compact('message'));
        return redirect()->route('home', $message);
    }
}
