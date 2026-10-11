<?php

namespace App\Http\Controllers\Userzone;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plant;

class AllocationController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $investors = auth()->user()->investors;
        $plants = Plant::all();
        return view('userzone.allocations.create', compact('investors', 'plants'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'investor_id' => ['required', 'exists:investors,id'],
            'plant_id' => ['required', 'exists:plants,id'],
            'percentage' => ['required', 'numeric', 'min:0.01', 'max:100'],
        ]);

        // Check if the investor belongs to the authenticated user
        $investor = auth()->user()->investors()->find($validated['investor_id']);
        if (!$investor) {
            return redirect()->back()->withErrors(['investor_id' => 'Invalid investor selected.']);
        }

        // Check if the plant exists
        $plant = Plant::find($validated['plant_id']);
        if (!$plant) {
            return redirect()->back()->withErrors(['plant_id' => 'Invalid plant selected.']);
        }

        // Create the allocation
        $investor->plants()->syncWithoutDetaching([
            $plant->id => ['percentage' => $validated['percentage']]
            
        ]);

        return redirect()->route('investors.index')->with('success', 'Allocation created successfully.');
    }

}
