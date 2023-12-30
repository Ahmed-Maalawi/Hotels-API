<?php

namespace App\Http\Controllers;

use App\Http\Resources\TopHotelsResource;
use App\Models\TopHotel;
use Illuminate\Http\Request;

class TopHotelController extends Controller
{
    public function index()
    {
        $topHotels = TopHotel::all();

        return response()->json([
            'status' => 'success',
            'message' => 'get all TopHotels',
            'top_hotels' => TopHotelsResource::collection($topHotels)
        ]);
    }
}
