<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Juego::all();

        return view('juego.index',compact('data'));
    }


    public function create()
    {
        return view('juego.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|max:30',
            'url' => 'required|max:250',
            'descripcion' => 'max:500',
            'url_imagen' => 'required|max:250',
            'estatus' => 'required|max:1'
        ]);

        $juego = new Juego();
        $juego->nombre = $request->nombre;
        $juego->url = $request->url;
        $juego->descripcion = $request->descripcion;
        $juego->url_imagen = $request->url_imagen;
        $juego->estatus = $request->estatus;
        $juego->save();

        return redirect('juegos')->with('state_messaje', 'Juego agregado exitosamente');
    }


    public function show($id)
    {
        $juego = Juego::findOrFail($id);

        return view('juego.show', compact('juego'));
    }


    public function edit($id)
    {
        $juego = Juego::findOrFail($id);

        return view('juego.edit', compact('juego'));
    }


    public function update(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|max:30',
            'url' => 'required|max:250',
            'descripcion' => 'max:500',
            'url_imagen' => 'required|max:250',
            'estatus' => 'required|max:1'
        ]);
        $juego = juego::findOrFail($request->id);
        $juego->nombre = $request->nombre;
        $juego->url = $request->url;
        $juego->url_imagen = $request->url_imagen;
        $juego->estatus = $request->estatus;
        $juego->descripcion = $request->descripcion;
        $juego->save();

        return redirect('juegos')->with('state_messaje', 'juego Actualizado');
    }

    public function destroy($id)
    {
        juego::destroy($id);
        $mensaje = "Juego Eliminado";

        return redirect('juegos')->with('state_messaje', $mensaje);
    }
}
