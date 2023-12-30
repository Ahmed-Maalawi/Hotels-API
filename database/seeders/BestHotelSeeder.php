<?php

namespace Database\Seeders;

use App\Models\BestHotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BestHotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bestHotels = BestHotel::factory()->count(50)->create();
    }
}
