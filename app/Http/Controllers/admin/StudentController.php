<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function students()
    {
        $user = User::where('role', 'user')->get();
        return view('admin.student.index', compact('user'));
    }
}
