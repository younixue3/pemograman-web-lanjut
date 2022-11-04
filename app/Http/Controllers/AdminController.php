<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Inertia\Testing\Concerns\Has;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
//        dd(route('store'));
        return Inertia::render('Dashboard', ['users' => $users]);
//        return view('admin.index', $compact);
    }

    public function gallery(Request $request)
    {
        return view('admin.gallery');
    }

    public function create(Request $request)
    {
        return Inertia::render('Form', ['create_url' => route('store')]);
    }

    public function store(Request $request)
    {
//        dd($request);
        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect(route('dashboard'))->with('success', 'Insert Data Successfully');
    }

    public function edit(Request $request, $id)
    {
        $user = User::find($id);
        return Inertia::render('FormUpdate', ['user' => $user]);
    }

    public function update(Request $request)
    {
//        dd($request);
        $user = User::find($request->id);
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        return redirect(route('dashboard'))->with('success', 'Insert Data Successfully');
    }
}
