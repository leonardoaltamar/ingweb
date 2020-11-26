<?php

namespace App\Http\Controllers;

use App\Models\persona;
use App\Models\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class productController extends Controller
{
    protected $modelProducto;
    protected $modelPersona;
    public function __construct() {

        $this->modelProducto = new producto();
        $this->modelPersona = new persona();

    }
    public function index(){
        $products = $this->modelProducto->all();
        $persons = $this->modelPersona->all('id','usuarios_id');
        return view('product.product', compact('persons', 'products'));
    }

    function add(Request $request){
        if(isset($request->idProduct)){

            $modelProducto = $this->modelProducto->find($request->idProduct);
            $modelProducto->descripcion = $request->desc;
            $modelProducto->precio = $request->price;
            $modelProducto->cantidad = $request->quantity;
            $modelProducto->iva = $request->iva;
            $modelProducto->categoria=$request->category;
            $modelProducto->update();

        }else{
            $modelProducto = new producto();
            $modelPersona = new persona();
            $persona =  $modelPersona->all()->where('usuarios_id',$request->idUser);

            foreach ($persona  as $person) {
                $id= $person["id"];
            }

            $modelProducto->descripcion = $request->desc;
            $modelProducto->precio = $request->price;
            $modelProducto->cantidad = $request->quantity;
            $modelProducto->iva = $request->iva;
            $modelProducto->categoria=$request->category;
            $img = $request->file('img')->store('public/imagenes');
            $url = Storage::url($img);
            $modelProducto->imagen = $url;
            $modelProducto->emprendedores_id = $id;
            $modelProducto->save();
        }
        return redirect()->route('product.index');

    }

    function delete(producto $product){
        $product->delete();

        return redirect()->route('product.index');
    }
}
