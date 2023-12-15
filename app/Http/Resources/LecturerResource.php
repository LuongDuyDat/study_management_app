<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LecturerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
           'lecturer_id' => $this->lecturer_id,
           'name' => $this->name,
           'email' => $this->email,
           'create_at' => $this->create_at,
           'update_at' => $this->update_at, 
        ];
    }
}