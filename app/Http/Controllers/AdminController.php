<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Requests\AdminRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
=======
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Inertia\Testing\Concerns\Has;
>>>>>>> 372ebda47250df612fb09d7a324de20663b01577

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $users = User::paginate(5);
        $compact = compact('users');
        return view('admin.index', $compact);
=======
        $users = User::all();
//        dd(route('store'));
        return Inertia::render('Dashboard', ['users' => $users]);
//        return view('admin.index', $compact);
>>>>>>> 372ebda47250df612fb09d7a324de20663b01577
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {
        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect(route('dashboard'))->with('success', 'Insert Data Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $compact = compact('user');
//        dd($user);
        return view('admin.form', $compact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminRequest $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect(route('admin.index'))->with('success', 'Insert Data Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return redirect(route('admin.index'))->with('success', 'Insert Data Successfully');
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
