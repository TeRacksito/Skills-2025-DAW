<?php

namespace App\Http\Controllers;

use App\Models\Administrators;
use Illuminate\Http\Request;

class AdministratorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255']
        ]);

        $administrator = Administrators::create([
            'name' => $request->name
        ]);

        return response()->json($administrator);
    }

    /**
     * Display the specified resource.
     */
    public function show(Administrators $administrators)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Administrators $administrators)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Administrators $administrators)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Administrators $administrators)
    {
        //
    }
}
