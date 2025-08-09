<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BranchController extends Controller
{
    public function add(Request $request)
    {
        $request->validate([
            'branch_name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'branch_email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed'],
        ]);
        // saving into database
        $user = User::create([
            'name' => $request->branch_name,
            'email' => $request->branch_email,
            'location' => $request->location,
            'role' => 'branch',
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));
        return redirect()->back()->with('success', 'Added Successfully');
    }
}
