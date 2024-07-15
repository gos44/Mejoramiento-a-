<?php
namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function index()
    {
        $jugadores = Jugador::orderBy("id", "desc")->get();
        return view("jugadores.index", compact("jugadores"));
    }

    public function create()
    {
        return view('jugadores.create');
    }

    public function store(Request $request)
    {
        $jugador = new Jugador();
        $jugador->nombre = $request->nombre;
        $jugador->fecha_nac = $request->fecha_nac;
        $jugador->posicion = $request->posicion;
        $jugador->save();
        return redirect()->route('jugadores.index');
    }

    public function show(Jugador $jugador)
    {
        return view('jugadores.show', compact('jugador'));
    }

    public function edit(Jugador $jugador)
    {
        return view('jugadores.edit', compact('jugador'));
    }

    public function update(Request $request, Jugador $jugador)
    {
        $jugador->nombre = $request->nombre;
        $jugador->fecha_nac = $request->fecha_nac;
        $jugador->posicion = $request->posicion;
        $jugador->save();
        return redirect()->route('jugadores.index');
    }

    public function destroy(Jugador $jugador)
    {
        $jugador->delete();
        return redirect()->route('jugadores.index');
    }
}
