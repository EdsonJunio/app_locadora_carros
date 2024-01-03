<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{

    public function __construct(Marca $marca)
    {
        $this->marca = $marca;
    }

    public function index()
    {
        $marcas = $this->marca->all();
        return response()->json($marcas, 200);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $marca = $this->marca->create($request->all());
        return response()->json($marca, 201);
    }


    public function show($id)
    {
        $marca = $this->marca->find($id);
        if ($marca === null) {
            return response()->json(['erro' => 'Recurso pesquisado nao existe'], 404);
        }

        return $marca;
    }


    public function edit(Marca $marca)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $marca = $this->marca->find($id);
        if ($marca === null) {
            return response()->json(['erro' => 'Impossivel realizar a atualizacao. O recurso solicitado nao existe'], 404);
        }

        $marca->update($request->all());
        return $marca;
    }


    public function destroy($id)
    {
        $marca = $this->marca->find($id);
        if ($marca === null) {
            return response()->json(['erro' => 'O recurso solicitado nao existe'], 404);
        }

        $marca->delete();
        return ['msg' => 'A marca foi removida com sucesso'];
    }
}
