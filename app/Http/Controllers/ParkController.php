<?php

namespace App\Http\Controllers;

use App\Park;

class ParkController extends Controller
{
    public function getParks()
    {
        $parks = Park::withCount('trees')->get();
        return response()->json($parks, 200);
    }

    public function getParkTrees(Park $park)
    {
        $park = Park::find($park)->first();
        $parkTrees = $park->trees()->get();
        return response()->json($parkTrees, 200);
    }
}
