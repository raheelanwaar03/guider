<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $user = User::where('role', 'branch')->get();
        return view('admin.dashboard', compact('user'));
    }
}
