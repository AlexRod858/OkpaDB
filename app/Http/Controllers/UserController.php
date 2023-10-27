<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Okupacion;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    /////////////////////////////////////////////////////
    /////////////////////////////////////////////////////
    /////////////////////  H O M E  /////////////////////
    /////////////////////////////////////////////////////

    public function home()
    {
        // Obtener el usuario logueado
        $user = Auth::user();

        // Obtener la información asociada al usuario
        $miNombre = $user->name;

        // Obtener las relaciones de amistad del usuario actual donde él es el emisor o receptor y el estado es 'aceptada'
        $misDirecciones = Okupacion::where('id_user', $user->id);

        return view('home', compact('nombre,misDirecciones'));
    }
    /////////////////////////////////////////////////////
    /////////////////////////////////////////////////////
    /////////////////  D A T A B A S E  /////////////////
    /////////////////////////////////////////////////////

    public function database()
    {
        $direcciones= Okupacion::all();

        return view('database', compact("direcciones"));
    }

    /////////////////////////////////////////////////////
    /////////////////////////////////////////////////////
    ///////////////////  Q U E  E S   ///////////////////
    /////////////////////////////////////////////////////

    public function quees()
    {


        return view('que-es');
    }

    
}
