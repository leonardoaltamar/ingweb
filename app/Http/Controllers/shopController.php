<?php

namespace App\Http\Controllers;
use PDF;

use App\Models\producto;
use App\Models\venta;
use App\Models\persona;
use App\Models\detalle;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class shopController extends Controller
{

    public function index(){
        $modelproduct = new producto();
        $products= $modelproduct->all();
        return view('shop.index', compact('products'));
    }

    public function compra(){
        return view('shop.compra');
    }

    public function getProductByCategory(Request $request){
        $modelproduct = new producto();
        $products = $modelproduct->all()->where('categoria', $request->category);
        return view('shop.index', compact('products'));
    }

    public function guardarVenta(Request $request){
        $ventas = new Venta();
        $venta = $ventas->all()->last();
        $numero = 1;

        if(!isset($venta)){
            $numero = 1;
        }else{
            $numero = $venta->numero + 1;
        }

        $usuarioId = $request->usuarioID;


        $modelPersona = new persona();
        $personaID =  $modelPersona->all()->where('usuarios_id',$usuarioId)->first()->id;
        $fecha = date('Y-m-d');
        $total = $request->total;

        $ventas->numero = $numero;
        $ventas->fecha = $fecha;
        $ventas->total = $total;
        $ventas->cliente_id = $personaID;
        $ventas->save();

        $venta = $ventas->all()->last();

        //PROCESO DE INGRESO PARA LA TABLA DETALLE
        $idUltimaFactura = $venta->id;
        $idProductos = $request->id;
        $cantidadProducto = $request->cantidad;
        $precioProducto = $request->precio;
        // return $request;
        // return $precioProducto;
        for ($i=0; $i < sizeof($idProductos) ; $i++) {
            $detalle = new Detalle();
            $detalle->precio = $precioProducto[$i];
            $detalle->cantidad = $cantidadProducto[$i];
            $detalle->ventas_id = $idUltimaFactura;
            $detalle->productos_id = $idProductos[$i];

            $detalle->save();
        }

        return redirect()->route('home');
    }


    public function detalleProducto($id){
        $modelproduct = new producto();
        $data = $modelproduct->join('personas', 'personas.id', '=', 'productos.emprendedores_id')
        ->where('productos.id', $id)->select('personas.nombres as nombreEmprendedor',
        'personas.apellidos as apellidoEmprendedor',
        'personas.telefono',
        'personas.direccion',
        'productos.descripcion',
        'productos.imagen')->first();
        return view('shop.detalleProducto', compact('data'));
    }


    public function imprimir(){
        $products = new producto();
        $data = $products->all();
        $pdf = PDF::loadView('pdf.reporteproducto', compact('data'));
        return $pdf->stream();
    }

    public function reporteCompras($idUser){
        $persona = new Persona();
        $person = $persona->all()->where('usuarios_id', $idUser)->first();
        $venta = new Venta();
        $data = $venta->all()->where('cliente_id', $person->id);
        $pdf = PDF::loadView('pdf.ventareporte', compact('data'));

        return $pdf->stream();
    }
}
