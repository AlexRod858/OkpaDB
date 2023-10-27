<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Okupacion;
use App\Models\User;

class OkupacionesController extends Controller
{
    /////////////////////////////////////////////////////
    /////////////////////////////////////////////////////
    /////////////////  D E T A L L E S  /////////////////
    /////////////////////////////////////////////////////

    public function detalles($id)
    {
        $detallitos= Okupacion::find($id);
        $calle = $detallitos->calle;
        $cp = $detallitos->cp;
        $numero = $detallitos->numero;
        $localidad = $detallitos->localidad;

        return view('detalles', compact("detallitos"));
    }

}
