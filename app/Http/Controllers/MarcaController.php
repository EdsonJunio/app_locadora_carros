<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{

    public function index()
    {
        return Marca::all();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        return Marca::create($request->all());
    }


    public function show(Marca $marca): Marca
    {
        return $marca;
    }


    public function edit(Marca $marca)
    {
        //
    }


    public function update(Request $request, Marca $marca)
    {
        $marca->update($request->all());
        return $marca;
    }


    public function destroy(Marca $marca)
    {
        $marca->delete();
       return ['msg' => 'A marca foi removida com sucesso'];
    }
}
