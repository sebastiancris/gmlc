<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth::user()->perfil==1)
        {
            return view('admin');
        }
        
        if(auth::user()->perfil==0)
        {
            
            return view('home');
            return view('registro');
        }
    }

    public function editarPerfil()
    {
        if(auth::user()->perfil==0)
        {
            return view('editarPerfil');
        }
        else
        {
            dd("sin acceso");
        }
    }

    public function enviarCaso()
    {
        if(auth::user()->perfil==0)
        {
            return view('enviarCaso');
        }
        else
        {
            dd("sin acceso");
        }
    }

    public function fondosConcursables()
    {
       

        // return view('home');
        if(auth::user()->perfil==1)
        {
            return view('admin');
        }
        
        if(auth::user()->perfil==0)
        {
            return view('registro');
        }

        return view('fondosConcursables');

    }

    public function seguimientoFondos()
    { 
        // if(auth::user()->perfil==1)
        // {
        //     return view('admin');     
        // }
        
        if(auth::user()->perfil==1)
        {
            // //dd("no tiene permisos para acceder a esta ruta");   
            // return redirect()->route('welcome')->with('error','The credentials do not match our records');

             dd("sin acceso---->>>");

            //return view('welcome');

        }    



        //dd("okok");
        return view('seguimientoFondos');

        // if(auth::user()->perfil==1)
        // {
        //     return view('admin');     
        // }
        
        // if(auth::user()->perfil==0)
        // {
        //     return view('registro');     
        // }
    }

    public function usuariosRegistrados()
    {
        if(auth::user()->perfil==1)
        {
            return view('usuariosRegistrados');
        }
        else
        {
            dd("sin acceso");
        }    
    }

    public function verPostulacionesFondos()
    {
        if(auth::user()->perfil==0)
        {
            return view('verPostulacionesFondos');
        }
        else
        {
            dd("sin acceso");
        }    
    }

    public function seguimientoCasosUsu()
    {
        if(auth::user()->perfil==0)
        {
            return view('seguimientoCasosUsuario');
        }
        else
        {
            dd("sin acceso");
        }    
    }

    public function seguimientoCasosAdmin()
    {
        if(auth::user()->perfil==1)
        {
            return view('seguimientoCasosAdmin');
        }
        else
        {
            dd("sin acceso");
        }    
    }
    
}
