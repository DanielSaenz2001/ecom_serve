<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;
use Illuminate\Foundation\Console\Presets\React;
class ClienteController extends Controller
{

    public function index()
    {
        //
        $clientes = Cliente::all(); 
        return response()->json($clientes);
    }

    public function create(Request $request)
    {

        cliente::create($request-> all());
        return response()->json(['success'=> true]);

    }

    public function show($id)
    {
        $cliente= Cliente::find($id);
        return response()->json($cliente);
    }
    public function update(Request $request, $id)
    {
        
        cliente::findOrFail($id)->update($request->all());

    }

    public function destroy($id)
    {
        cliente::findOrFail($id)->delete();
    }

}


/**
use App\themes;
class ThemesController extends Controller
{
    public function index()
    {
        return response()->json(['success' => true,
            'data' => $this->listar_data(),
            'message' => 'Operacion Correcta'], 200);
    }

    public function create(Request $request)
    {
        $tema = new \stdClass();

        $tema->titulo = $request->input('titulo');
        $tema->descripcion = $request->input('descripcion');
        $tema->fecha = $request->input('fecha');
        $tema->asesor = $request->input('asesor');
        themes::create($request->all());
        return response()->json(
            ['success' => true,
                'data' => $this->listar_data(),
                'message' => 'Operacion Correcta'],
            201);
    }

    public function update(Request $request, $id)
    {
        themes::find($id)->update($request->all());
        return response()->json(
            ['success' => true,
                'data' => $this->listar_data(),
                'message' => 'Operacion Correcta'],
            201);
    }

    public function destroy($id)
    {
        themes::find($id)->delete();
        return response()->json(
            ['success' => true,
                'data' => $this->listar_data(),
                'message' => 'Operacion Correcta'],
            201);
    }

    public function listar_data()
    {

        return themes::all();
    }
}
**/