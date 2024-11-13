<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Link ke halaman daftar paket
         return view('admin.paket');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Link ke halaman form pembuatan paket
        return view('admin.create-paket');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(/*string $id*/)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(/*string $id*/)
    {
        // Link ke halaman form edit paket
        return view('admin.edit-paket');
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