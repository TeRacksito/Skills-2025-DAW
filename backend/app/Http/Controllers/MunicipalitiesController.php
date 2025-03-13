<?php

namespace App\Http\Controllers;

use App\Models\Municipalities;
use Faker\Provider\sv_SE\Municipality;
use Illuminate\Http\Request;

class MunicipalitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Municipalities::paginate(15));
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
            'name' => ['required', 'string']
        ]);

        $municipalities = Municipalities::create([
            'name' => $request->name
        ]);

        return response()->json($municipalities);
    }

    /**
     * Display the specified resource.
     */
    public function show(Municipalities $municipalities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Municipalities $municipalities)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Municipalities $municipalities)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Municipalities $municipalities)
    {
        //
    }
}
