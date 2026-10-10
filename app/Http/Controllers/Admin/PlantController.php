<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plant;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plants = Plant::all();
        return view('admin.plants.index', compact('plants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.plants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'online_since' => ['required', 'date'],
            'output' => ['required', 'numeric', 'min:0'],
            'parcels' => ['required', 'integer', 'min:1'],
            'description' => ['nullable', 'string'],
            'energy_storage' => ['nullable', 'boolean'],
            'agripv' => ['nullable', 'boolean']
        ]);
       
        $validated['energy_storage'] = $request->boolean('energy_storage');
        
        $validated['agripv'] = $request->boolean('agripv');

        auth()->user()->plants()->create($validated);

        return redirect()->route('admin.plants.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plant $plant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plant $plant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plant $plant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plant $plant)
    {
        //
    }
}
