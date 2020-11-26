<?php

namespace App\Http\Controllers;

use App\Models\persona;
use PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\detalle;


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

    public function ReporteVentas(){

        $detalle = new detalle();
        $detalle = new detalle();
        $idUser = Auth::user()->id;
    }
}
