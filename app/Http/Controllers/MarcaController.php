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
        return $marcas;
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $marca = $this->marca->create($request->all());
        return $marca;
    }


    public function show($id)
    {
        $marca = $this->marca->find($id);
        if ($marca === null) {
            return ['erro' => 'Recurso pesquisado nao existe'];
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
            return ['erro' => 'Impossivel realizar a atualizacao. O recurso solicitado nao existe'];
        }

        $marca->update($request->all());
        return $marca;
    }


    public function destroy($id)
    {
        $marca = $this->marca->find($id);
        if ($marca === null) {
            return ['erro' => 'O recurso solicitado nao existe'];
        }

        $marca->delete();
        return ['msg' => 'A marca foi removida com sucesso'];
    }
}
