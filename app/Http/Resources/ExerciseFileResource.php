<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExerciseFileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'exercise_file_id' => $this->exercise_file_id,
            'exercise_file' => $this->exercise_file,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'exercise_id' => $this->exercise_id,
        ];
    }
}
