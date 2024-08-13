<?php

namespace App\Http\Services;

use App\Models\OnlineLesson;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class OnlineDarsService
{
    public function create(array $data): OnlineLesson
    {
        $lesson = new OnlineLesson;
        $lesson->description = $data['description'];
        if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
            $lesson->image = $data['image']->store('lesson', 'public');
        }
        $lesson->save();

        return $lesson;
    }

    public function update(OnlineLesson $lesson, array $data)
    {
        $lesson->description = $data['description'];
        if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
            $lesson->image = $data['image']->store('lesson', 'public');
        }
        $lesson->save();

        return $lesson;
    }

    public function delete(OnlineLesson $lesson): void
    {
        if ($lesson->image) {
            Storage::disk('public')->delete($lesson->image);
        }
        $lesson->delete();
    }

    private function handleImageUpload($image)
    {
        if (! $image) {
            return null;
        }

        return $image->store('lesson', 'public');
    }
}
