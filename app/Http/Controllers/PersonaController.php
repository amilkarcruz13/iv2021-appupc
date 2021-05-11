<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function index(){
        $personas = Persona::where('estado', 1)->paginate(3);
        // dd($personas);
        return view('admin/persona/index')->with('personas', $personas);
    }
    public function create(){
        return view('admin/persona/create');
    }
    public function store(Request $request){
        $persona = new Persona($request->all());
        $persona->save();
        return redirect()->route('persona.index');
    }
    public function edit($id){
        $persona = Persona::find($id);
        return view('admin/persona/edit')->with('persona', $persona);
    }
    public function update(Request $request, $id){
        $persona = Persona::find($id);
        $persona->fill($request->all());
        $persona->save();
        return redirect()->route('persona.index');
    }
}
