<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactForUsers;

class ContactUsersController extends Controller
{
    public function getUsers()
    {
        $users = ContactForUsers::all();

        return view('admin.sites.admin_user.index', compact('users'));
    }

    public function deleteUser($id)
    {
        $users = ContactForUsers::find($id);
        if ($users->delete()) {
            return redirect()->route('contact-user');
        }
    }
}
