<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Okupacion;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    //
    /////////////////////////////////////////////////////
    /////////////////////////////////////////////////////
    /////////////////////  H O M E  /////////////////////
    /////////////////////////////////////////////////////

    public function home()
    {
        // Obtener el usuario logueado
        $user = Auth::user();

        // Obtener la información asociada al usuario
        $nombre = $user->name;

        // Obtener las relaciones de amistad del usuario actual donde él es el emisor o receptor y el estado es 'aceptada'
        // $amigosComoEmisor = Okupacion::where('usuario_id_emisor', $user->id)
        //     ->where('estado', 'aceptada')
        //     ->pluck('usuario_id_receptor');

        return view('home', compact('nombre'));
    }
    /////////////////////////////////////////////////////
    /////////////////////////////////////////////////////
    /////////////////////  M A P A  /////////////////////
    /////////////////////////////////////////////////////

    public function mapa()
    {
        // Obtener el usuario logueado
        $user = Auth::user();

        // Obtener la información asociada al usuario
        $nombre = $user->name;

        return view('mapa', compact('nombre'));
    }

    /////////////////////////////////////////////////////
    /////////////////////////////////////////////////////
    ///////////////////  E S P A Ñ A  ///////////////////
    /////////////////////////////////////////////////////

    public function espana()
    {
        // Obtener el usuario logueado
        $user = Auth::user();

        // Obtener la información asociada al usuario
        $nombre = $user->name;

        return view('espana', compact('nombre'));
    }

    /////////////////////////////////////////////////////
    /////////////////////////////////////////////////////
    ///////////////////  E S P A Ñ A  ///////////////////
    /////////////////////////////////////////////////////

    public function ueuropea()
    {
        // Obtener el usuario logueado
        $user = Auth::user();

        // Obtener la información asociada al usuario
        $nombre = $user->name;

        return view('ue', compact('nombre'));
    }

    /////////////////////////////////////////////////////
    /////////////////////////////////////////////////////
    /////////////////////  O T R O  /////////////////////
    /////////////////////////////////////////////////////

    public function otro()
    {
        // Obtener el usuario logueado
        $user = Auth::user();

        // Obtener la información asociada al usuario
        $nombre = $user->name;

        return view('otro', compact('nombre'));
    }
}
