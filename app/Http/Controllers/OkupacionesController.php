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
        $detallitos = Okupacion::find($id);
        $calle = $detallitos->calle;
        $cp = $detallitos->cp;
        $numero = $detallitos->numero;
        $localidad = $detallitos->localidad;

        $latitud = $detallitos->latitud;
        $longitud = $detallitos->longitud;

        return view('detalles', compact("detallitos",'latitud', 'longitud'));
    }

    /////////////////////////////////////////////////////
    /////////////////////////////////////////////////////
    //////////////  D I R E C C I O N E S  //////////////
    /////////////////////////////////////////////////////

    // public function direcciones()
    // {
    //     $config['center'] = 'Madrid, Spain';
    //     $config['zoom'] = '16';
    //     $config['map_height'] = '500px';
    //     $config['geocodeCaching'] = 'true';

    //     GMaps::initialize($config);

    //     //Añado la ubicacion
    //     $marker['positions'] = 'Chueca';

    //     GMaps::add_marker($marker);

    //     return view('detalles', compact("marker"));
    // }
}
