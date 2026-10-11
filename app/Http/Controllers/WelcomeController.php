<?php

namespace App\Http\Controllers;

use App\Models\Plant;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $plants = Plant::all();
        return view('welcome', compact('plants'));
    }
}
