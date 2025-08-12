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

    public function index()
    {
        $user = User::where('role', 'branch')->get();
        return view('admin.branch.index', compact('user'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed'],
        ]);
        // saving into database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'location' => $request->location,
            'role' => 'branch',
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));
        return redirect()->back()->with('success', 'Added Successfully');
    }
}
