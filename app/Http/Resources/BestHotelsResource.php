<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BestHotelsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'hotel' => $this->name,
            'hotelRate' => $this->fare,
            'hotelFare' => $this->rate,
            'roomAmenities' => str_replace(' ', ',', $this->Amenities),
        ];
    }
}
