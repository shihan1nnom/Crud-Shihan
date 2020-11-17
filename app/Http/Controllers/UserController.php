<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $usuarios = User::all();
        return view('usuarios.index', compact('usuarios'));
    } 
    
    public function crear(){
        return view('usuarios.crear');
    }

    public function guardar(Request $request){
        $usuario = User::create($request->all());
        return redirect()->route('usuario.index');
    }

    public function detalle($id){
        $usuario = User::find($id);
        return view('usuarios.detalle', compact('usuario'));
    }

    public function eliminar($id){
        $usuario = User::find($id)->delete();
        return redirect()->route('usuario.index');
    }
    
    public function editar($id){
        $usuario = User::find($id);
        return view('usuarios.editar', compact('usuario'));
    }
    
    public function actualizar(Request $request, $id){
        $usuario = User::find($id)->update($request->all());
        return redirect()->route('usuario.detalle', $id);
    }

}
