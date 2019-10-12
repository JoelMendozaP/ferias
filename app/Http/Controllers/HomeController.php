<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

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
        return view('home');
    }
    public function crear(Request $request)
    {
        //return $request->all();
        $request->validate([
            'nombre' => 'required',
            'nroStad' => 'required',
            'descripcion' => 'required',
            'objetivo' => 'required',
            'telefono' => 'required'
        ]);
        $feriaNueva = new App\Feria;
        $feriaNueva->nombre = $request->nombre;
        $feriaNueva->nroStad = $request->nroStad;
        $feriaNueva->descripcion = $request->descripcion;
        $feriaNueva->objetivo = $request->objetivo;
        $feriaNueva->telefono = $request->telefono;
        $feriaNueva->save();
        return back();
        //return view('/');
    }
    public function agregar(Request $request)
    {
        return $request->all();
        
        
        //return view('/');
    }
}
