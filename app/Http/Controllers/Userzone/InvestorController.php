<?php

namespace App\Http\Controllers\Userzone;

use App\Http\Controllers\Controller;
use App\Models\Investor;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $investors = auth()->user()->investors;
        return view('userzone.investors.index', compact('investors'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('userzone.investors.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $validated = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['unique:investors,email', 'required', 'string', 'email', 'max:255'],
        'phone' => ['nullable', 'string', 'max:255'],
        'address' => ['nullable', 'string', 'max:255'],
        'city' => ['nullable', 'string', 'max:255'],

    ]);

    auth()->user()->investors()->create($validated);

    return redirect()->route('investors.index');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Investor $investor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Investor $investor)
    {
        //
    }

}
