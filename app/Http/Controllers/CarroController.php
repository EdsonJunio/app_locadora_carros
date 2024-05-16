<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarroRequest;
use App\Http\Requests\UpdateCarroRequest;
use App\Models\Carro;
use Illuminate\Http\Response;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCarroRequest $request
     * @return void
     */
    public function store(StoreCarroRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Carro $carro
     * @return void
     */
    public function show(Carro $carro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Carro $carro
     * @return void
     */
    public function edit(Carro $carro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCarroRequest $request
     * @param Carro $carro
     * @return void
     */
    public function update(UpdateCarroRequest $request, Carro $carro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Carro $carro
     * @return void
     */
    public function destroy(Carro $carro)
    {
        //
    }
}
