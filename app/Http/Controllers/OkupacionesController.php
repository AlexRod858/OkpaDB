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
        $okupaciones = Okupacion::where('id_user',$user->id)->get();
        return view('home', compact("okupaciones"));
    }
}
