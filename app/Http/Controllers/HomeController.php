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
        // return view('home');
        if(auth::user()->perfil==1)
        {
            return view('admin');
        }
        
        if(auth::user()->perfil==0)
        {
            return view('registro');
        }
    }

    public function fondosConcursables()
    {
       
        //dd("okok");
        return view('fondosConcursables');

        // if(auth::user()->perfil==1)
        // {
        //     return view('admin');     
        // }
        
        // if(auth::user()->perfil==0)
        // {
        //     return view('registro');     
        // }
    }

}
