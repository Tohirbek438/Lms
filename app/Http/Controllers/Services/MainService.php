<?php

namespace App\Http\Controllers\Services;

use App\Models\MainInfo;

class MainService
{
    public function getAll()
    {
        $main = MainInfo::all();
        if ($main->isEmpty()) {
            return response()->json(['status' => 400, 'message' => 'Information is empty!']);
        } else {
            return $main;
        }

    }

    public function createItem($data)
    {
        return MainInfo::create($data);
    }
}
