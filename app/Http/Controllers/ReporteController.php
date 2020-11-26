<?php

namespace App\Http\Controllers;

use App\Models\persona;
use PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\detalle;
use App\Models\producto;
use App\Models\calificacione;


class ReporteController extends Controller
{
    function reporteProteccionDatos($id){

        $persona = new persona();

        $data = $persona->all()->where('usuarios_id', $id)->first();
        $pdf = PDF::loadView('pdf.reporteProteccionDatos', compact('data'));

        return $pdf->stream();
    }

    public function reporteDetalle($idfactura){
        $detalle = new detalle();
        $data = $detalle->join('productos', 'productos.id', '=', 'detalles.productos_id')
        ->where('detalles.ventas_id', $idfactura)->select(
            'productos.descripcion', 'productos.categoria', 'productos.imagen','detalles.precio',
            'detalles.cantidad'
        )->get();
        $pdf = PDF::loadView('pdf.reporteDetalle', compact('data'));
        return $pdf->stream();
    }

    public function reporteVentas(){

        $detalle = new detalle();
        $idUser = Auth::user()->id;

        $personas = new persona();
        $persona = $personas->all()->where('usuarios_id', $idUser)->first();

        $data = $detalle->join('productos', 'productos.id','=', 'detalles.productos_id')
        ->where('productos.emprendedores_id',$persona->id)->
        select(
            'productos.id','productos.descripcion','productos.categoria','productos.imagen'
            ,'detalles.precio','detalles.cantidad'
        )->get();

        $pdf = PDF::loadView('pdf.ventasReporte', compact('data'));
        return $pdf->stream();
    }

    public function misProductos(){

        $productos = new producto();
        $idUser = Auth::user()->id;

        $personas = new persona();
        $persona = $personas->all()->where('usuarios_id', $idUser)->first();

        $data = $productos->all()->where('emprendedores_id', $persona->id);

        $pdf = PDF::loadView('pdf.misReportes', compact('data'));
        return $pdf->stream();
    }

    public function reporteOpiniones($idProducto){
        $calificacione = new calificacione();
        $listOpiniones = $calificacione->join('personas', 'personas.id', '=', 'calificaciones.personas_id')->
        where('productos_id', $idProducto)->get();
        return $listOpiniones;
    }
}
