<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminEditController extends Controller
{
    public function edit()
    {
        return view('admin.admin-edit.index');
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        $user = User::find($id);
        if (! $user) {
            return redirect()->route('dashboard')->withErrors(['error' => 'User not found.']);
        }
        $user->name = $data['name'];
        $user->email = $data['email'];
        if (! empty($data['password'])) {
            $user->password = bcrypt($data['password']);
        }
        $user->save();

        return redirect()->route('dashboard')->with('success', 'User updated successfully.');
    }

    public function index()
    {
        return view('admin.admin-edit.show');
    }
}
