<?php

namespace App\Http\Services;

use App\Models\Preference;
use Illuminate\Support\Facades\Storage;

class PreferenceService
{
    public function createPreference($data)
    {
        if (isset($data['image'])) {
            $data['image'] = $data['image']->store('images', 'public');
        }

        return Preference::create($data);
    }

    public function getAllPreferences()
    {
        return Preference::all();
    }

    public function getPreferenceById($id)
    {
        return Preference::findOrFail($id);
    }

    public function updatePreference($id, $data)
    {
        $preference = Preference::findOrFail($id);
        if (isset($data['image'])) {
            Storage::disk('public')->delete($preference->image);
            $data['image'] = $data['image']->store('images', 'public');
        }
        $preference->update($data);

        return $preference;
    }

    public function deletePreference($id)
    {
        $preference = Preference::findOrFail($id);
        Storage::disk('public')->delete($preference->image);
        $preference->delete();

        return $preference;
    }
}
