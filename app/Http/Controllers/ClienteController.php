<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Response;

class ClienteController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param StoreClienteRequest $request
     * @return void
     */
    public function store(StoreClienteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Cliente $cliente
     * @return void
     */
    public function show(Cliente $cliente)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param UpdateClienteRequest $request
     * @param Cliente $cliente
     * @return void
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Cliente $cliente
     * @return void
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
