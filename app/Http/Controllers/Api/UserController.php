<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;


class UserController extends Controller
{
    
    public function index()
    {
         $users =  Users::all();
        return $users;
    }

   
    public function store(Request $request)
    {

       $findUser = Users::where('correo', '=', $request->correo)->first();

       if($findUser) return abort(400, "Correo ya existente");

        $user = new Users();

        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->edad = $request->edad;
        $user->telefono = $request->telefono;
        $user->direccion = $request->direccion;
        $user->correo = $request->correo;
        $user->clave = $request->clave;
        $user->cedula = $request->cedula;
        $user->role = $request->role;
        $user->diagnosticado = "";
        $user->sintomasAdicionales = "";
        $user->fiebre = "";
        $user->erupciones = "";
        $user->tos = "";
        $user->doloresMusculares = "";
        $user->dolorCabeza = "";
        $user->vomito = "";
       

        $user->save();
        return $user;
    }

   
    public function show($id)
    {
        $user = Users::find($id);
        return $user;
    }


    public function authUser(Request $request)
    {

        $user = Users::where('correo', '=', $request->correo)->first();
        if(!$user) return abort(400, "Usuario no encontrado");

        if($user->clave == $request->clave){
            return $user;

        }
        return abort(400, "Credenciales invalidas");

    }

  
    public function update(Request $request, $id)
    {
        $user = Users::findOrFail($request->id) ;

        $user->diagnosticado = $request->diagnosticado;
        $user->sintomasAdicionales = $request->sintomasAdicionales;
        $user->fiebre = $request->fiebre || "0";
        $user->erupciones = $request->erupciones || "0";
        $user->tos = $request->tos || "0";
        $user->doloresMusculares = $request->doloresMusculares || "0";
        $user->dolorCabeza = $request->dolorCabeza || "0";
        $user->vomito = $request->vomito || "0";

        $user->save();
        return $user;
    }

   
    public function destroy($id)
    {
         $user = Users::destroy($id);
        return $user;
    }
}
