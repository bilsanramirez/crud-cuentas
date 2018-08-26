<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CuentaRequets;
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

    public function store(CuentaRequets $request){
        $cuenta = new Cuenta();

        $cuenta->nombre = $request->nombre;
        $cuenta->usuario = $request->usuario;
        $cuenta->clave = $request->clave;

        $cuenta->save();


        return redirect()->route('cuentas.index')->with('info', 'La cuenta fue creada exitosamente');
    }

    public  function edit($id){

        $cuenta = Cuenta::find($id);
        return view('cuentas.edit', compact('cuenta'));
    }

    public function update(CuentaRequets $request, $id){

        $cuenta = Cuenta::find($id);

        $cuenta->nombre = $request->nombre;
        $cuenta->usuario = $request->usuario;
        $cuenta->clave = $request->clave;

        $cuenta->save();


        return redirect()->route('cuentas.index')->with('info', 'La cuenta fue actualizada');
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
