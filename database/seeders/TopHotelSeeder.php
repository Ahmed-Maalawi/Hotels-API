<?php

namespace Database\Seeders;

use App\Models\TopHotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopHotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hotel = TopHotel::factory()->count(50)->create();
    }
}
