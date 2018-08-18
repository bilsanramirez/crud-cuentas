<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuenta;

class CuentaController extends Controller
{
    public  function index(){

        $cuentas = Cuenta::orderBy('id', 'DESC')->paginate(5);

        return view('cuentas.index', compact('cuentas'));
    }

    public function create(){

        return view('cuentas.create');

    }

    public  function edit($id){

        $cuenta = Cuenta::find($id);
        return view('cuentas.edit', compact($cuenta));
    }

    public function show($id){
        $cuenta = Cuenta::find($id);

        return view('cuentas.show', compact('cuenta'));
    }

    public function destroy($id){

        $cuenta = Cuenta::find($id);

        $cuenta->delete();

        return back()->with('info', 'La cuenta fue eliminada');
    }
}
