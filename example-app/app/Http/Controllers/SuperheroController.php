<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use App\Http\Requests\StoreSuperheroRequest;
use App\Http\Requests\UpdateSuperheroRequest;

class SuperheroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSuperheroRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Superhero $superhero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Superhero $superhero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSuperheroRequest $request, Superhero $superhero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Superhero $superhero)
    {
        //
    }
}
