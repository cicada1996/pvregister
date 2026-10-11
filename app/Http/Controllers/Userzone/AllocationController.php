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
        //
    }

}
