<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TopHotelsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'hotelName' => $this->name,
            'rate' => $this->rate,
            'price' => $this->price,
            'discount' => $this->discount,
            'amenities' => explode(" ", $this->amenities),
        ];
    }
}
