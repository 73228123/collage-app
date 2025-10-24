<?php

namespace App\Http\Controllers;

use App\Models\Actividade;
use Illuminate\Http\Request;

class ActividadeController extends Controller
{
    public function index()
    {
        $actividades = Actividade::get();
        return view('dashboard.actividades.index',compact('actividades'));
    }

    public function create()
    {
        return view('dashboard.actividades.create');
    }

    public function store(Request $request)
    {
        Actividade::create($request->only('fecha','descripcion'));

        return redirect()->route('dashboard.actividades.index');

    }

    public function edit($id){
        $actividade = Actividade::find($id);
        return view('dashboard.actividades.edit',compact('actividade'));
    }

    public function update(Request $request, $id){
        $actividade = Actividade::find($id);
        $actividade->update([
            'fecha' => $request->fecha,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('dashboard.actividades.index');
    }
}
