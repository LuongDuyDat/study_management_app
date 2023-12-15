<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'subject_id' => $this->subject_id,
            'id' => $this->id,
            'name' => $this->name,
            'credit_number' => $this->credit_number,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'lecturer_id' => $this->lecturer_id,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,  
        ];
    }
}
