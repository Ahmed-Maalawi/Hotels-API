<?php

namespace App\Http\Controllers;

use App\Http\Resources\BestHotelsResource;
use App\Models\BestHotel;
use Illuminate\Http\Request;

class BestHotelController extends Controller
{
    public function index()
    {
        $bestHotels = BestHotel::all();

        return response()->json([
            'status' => 'success',
            'message' => 'get all BestHotels',
            'best_hotels' => BestHotelsResource::collection($bestHotels)
        ]);
    }
}
