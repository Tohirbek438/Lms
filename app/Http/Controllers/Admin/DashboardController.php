<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactForUsers;
use App\Models\MySite;
use App\Models\Service;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $projects = MySite::all();
        $users = User::all();
        $contacts = ContactForUsers::all();
        $service = Service::all();

        return view('admin.index', compact('projects', 'users', 'contacts', 'service'));
    }
}
