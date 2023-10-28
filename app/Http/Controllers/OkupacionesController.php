<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Okupacion;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OkupacionesController extends Controller
{
    /////////////////////////////////////////////////////
    /////////////////////////////////////////////////////
    /////////////////  D E T A L L E S  /////////////////
    /////////////////////////////////////////////////////

    public function detalles($id)
    {
        $detallitos = Okupacion::find($id);

        return view('detalles', compact("detallitos"));
    }

    /////////////////////////////////////////////////////
    /////////////////////////////////////////////////////
    /////////////////////  H O M E  /////////////////////
    /////////////////////////////////////////////////////
    public function misOkupaciones()
    {
        // Obtener el usuario logueado
        $user = Auth::user();
        $okupaciones = Okupacion::where('id_user', $user->id)->get();
        return view('home', compact("okupaciones"));
    }
    /////////////////////////////////////////////////////
    /////////////////////////////////////////////////////
    ///////////////  F O R M U L A R I O ////////////////
    /////////////////////////////////////////////////////

    public function nuevaOku()
    {
        return view('nueva');
    }
    /////////////////////////////////////////////////////
    /////////////////////////////////////////////////////
    /////////////  R E C I B I R  F O R M  //////////////
    /////////////////////////////////////////////////////
    public function recibeForm(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            // 'calle' => 'required',
            // 'cp' => 'required',
            // 'numero' => 'required',
            // 'localidad' => 'required',
            // 'latitud' => 'required',
            // 'longitud' => 'required'
        ]);
        //Los inserto
        $okupacion = new Okupacion();
        $okupacion->id_user = $user->id;
        $okupacion->calle = $request->input('calle');
        $okupacion->cp = $request->input('cp');
        $okupacion->numero = $request->input('numero');
        $okupacion->localidad = $request->input('localidad');
        $okupacion->latitud = $request->input('latitud');
        $okupacion->longitud = $request->input('longitud');

        $okupacion->save();
        //Si añado la variable, no me funciona
        $okupaciones = Okupacion::where('id_user', $user->id)->get();
        return view('home', compact("okupaciones"));
    }

    /////////////////////////////////////////////////////
    /////////////////////////////////////////////////////
    //////////////////  B O R R A R  ////////////////////
    /////////////////////////////////////////////////////

    public function borrarElemento($id)
    {
        
        $okupacion = Okupacion::find($id);        
        $okupacion->delete();

        //Si añado la variable, no me funciona
        $user = Auth::user();
        $okupaciones = Okupacion::where('id_user', $user->id)->get();
        return view('home', compact("okupaciones"));
    }
}
