<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentExerciseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'exercise_id' => $this->exercise_id,
            'result' => $this->result,
            'comment' => $this->comment,
            'student_id' => $this->student_id,
            'assignment_id' => $this->assignment_id,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
        ];
    }
}
