<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLocacaoRequest;
use App\Http\Requests\UpdateLocacaoRequest;
use App\Models\Locacao;
use Illuminate\Http\Response;

class LocacaoController extends Controller
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
     * @param StoreLocacaoRequest $request
     * @return void
     */
    public function store(StoreLocacaoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Locacao $locacao
     * @return void
     */
    public function show(Locacao $locacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Locacao $locacao
     * @return void
     */
    public function edit(Locacao $locacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateLocacaoRequest $request
     * @param Locacao $locacao
     * @return void
     */
    public function update(UpdateLocacaoRequest $request, Locacao $locacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Locacao $locacao
     * @return void
     */
    public function destroy(Locacao $locacao)
    {
        //
    }
}
