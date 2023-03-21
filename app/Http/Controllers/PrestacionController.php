<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prestacion;
use App\Models\Event;


class PrestacionController extends Controller
{
    public function index(Request $request)
    {
      
    	return view('prestaciones.index');
    }

    public function action(Request $request)
    {
    	
    	
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(prestacion $prestacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(prestacion $prestacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($request, prestacion $prestacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prestacion $prestacion)
    {
        //
    }
}
