<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LectureResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'lecture_id' => $this->lecture_id,
            'lecture_file' => $this->lecture_file,
            'start_at' => $this->start_at,
            'end_at' => $this->end_at,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'subject_id' => $this->subject_id,
        ];
    }
}
