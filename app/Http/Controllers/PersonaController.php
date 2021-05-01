<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function index(){
        $personas = Persona::where('estado', 1)->paginate(1);
        return view('admin/persona/index')->with('personas', $personas);
    }
}
