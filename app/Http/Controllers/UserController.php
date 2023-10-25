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
    ///////////////  D A S H B O A R D  /////////////////
    /////////////////////////////////////////////////////

    public function dashboard()
    {
        // Obtener el usuario logueado
        $user = Auth::user();

        // Obtener la información asociada al usuario
        $nombre = $user->name;

        // Obtener las relaciones de amistad del usuario actual donde él es el emisor o receptor y el estado es 'aceptada'
        $amigosComoEmisor = Okupacion::where('usuario_id_emisor', $user->id)
            ->where('estado', 'aceptada')
            ->pluck('usuario_id_receptor');

        return view('dashboard', compact('nombre'));
    }


}
