<?php
namespace App\Http\Controllers;
use App\Models\Colaborador;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    public function index()
    {
        $colaboradores = Colaborador::orderBy("id", "desc")->get();
        return view('colaboradores.index', compact('colaboradores'));
    }

    public function create()
    {
        return view('colaboradores.create');
    }

    public function store(Request $request)
    {
        $colaborador = new Colaborador();
        $colaborador->nombre = $request->nombre;
        $colaborador->nif = $request->nif;
        $colaborador->save();
        return redirect()->route('colaboradores.index');
    }

    public function show(Colaborador $colaborador)
    {
        return view('colaboradores.show', compact('colaborador'));
    }

    public function edit(Colaborador $colaborador)
    {
        return view('colaboradores.edit', compact('colaborador'));
    }

    public function update(Request $request, Colaborador $colaborador)
    {
        $colaborador->update($request->all());
        return redirect()->route('colaboradores.index');
    }

    public function destroy(Colaborador $colaborador)
    {
        $colaborador->delete();
        return redirect()->route('colaboradores.index');
    }
}
