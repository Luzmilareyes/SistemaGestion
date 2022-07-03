<?php

namespace App\Http\Controllers;
use App\Models\Gestor;
use App\Models\Propietarioestablecimiento;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login2 (Request $request){
        $email = $request->input('email');
        $clave = $request->input('password');

        $gestor = Gestor::where('email', $email)->first();
        if ($gestor){
            
            if($gestor-> clave = $clave){
                session("Usuario",$gestor);
                return view("home");
            }
        }

        $propietarioestablecimiento = Propietarioestablecimiento::where('email', $email)->first();
        if ($propietarioestablecimiento){
            
            if($propietarioestablecimiento-> clave = $clave){
                session("Usuario",$propietarioestablecimiento);
                return view("home");
            }
        }
        
        return redirect()->back();



    }
}
