<?php

namespace App\Http\Controllers\branch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchDashboardController extends Controller
{
    public function index()
    {
        return view('branch.dashboard');
    }
}
