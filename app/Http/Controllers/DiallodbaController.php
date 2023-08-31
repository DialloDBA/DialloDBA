<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiallodbaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    
    public function contact()
    {
        return view('pages.contact.index');
    }
    public function store(Request $request)
    {
        //
    }
    public function blog()
    {
        return view('pages.blog.index');
    }
    public function portfolio()
    {
        return view('pages.portfolio.index');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
