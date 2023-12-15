<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AssignmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'assignment_id' => $this->assignment_id,
            'title' => $this->title,
            'description' => $this->description,
            'assignment_file' => $this->assignment_file,
            'start_at' => $this->start_at,
            'end_at' => $this->end_at,
            'create_at' => $this->create_at,
            'subject_id' => $this->subject_id,
        ];
    }
}
