<?php

namespace App\Http\Controllers;

use App\Models\Reaction;
use App\Http\Requests\StoreReactionRequest;
use App\Http\Requests\UpdateReactionRequest;

class ReactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reaction  $reaction
     * @return \Illuminate\Http\Response
     */
    public function show(Reaction $reaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reaction  $reaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Reaction $reaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReactionRequest  $request
     * @param  \App\Models\Reaction  $reaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReactionRequest $request, Reaction $reaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reaction  $reaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reaction $reaction)
    {
        //
    }
}
