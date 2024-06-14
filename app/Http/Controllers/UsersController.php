<?php

namespace App\Http\Controllers;

use App\Models\user_activity;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\user_photo;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = User::all();

        return view('users', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'nama_user' => $request->nama_user,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => 1
        ]);

        $user = User::latest()->first();
        $userId = $user->id;

        user_activity::create([
            'user_id' => $userId,
            'status' => 'SUCCESS',
            'deskripsi' => $request->username . 'membuat akun baru',
            'function' => __FUNCTION__,
            'method' => $request->method()
        ]);


        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $current = User::find($id);
        $userPhoto = user_photo::find($id);

        return view('editUser', compact('current', 'userPhoto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $current_user = User::find($id);
        $user_photo = user_photo::find($id);

        $current_user->email = $request->email;
        $current_user->name = $request->name;
        $current_user->nama_user = $request->nama_user;
        $current_user->no_hp = $request->np_hp;

        $current_user->save();

        if ($request->hasFile('userPP')) {
            $file = $request->file('userPP');

            $fileName = $file->getClientOriginalName();
            $filePath = $file->storeAs('usersProfile', $fileName);

            $tujuan_upload = 'usersProfile';
            $file->move($tujuan_upload, $fileName);
            
            user_photo::create([
                'user_id' => Auth::id(),
                'foto' => $fileName
            ]);
        }


        user_activity::create([
            'user_id' => Auth::id(),
            'status' => 'SUCCESS',
            'deskripsi' => $request->username . '  memperbarui data',
            'function' => __FUNCTION__,
            'method' => $request->method()
        ]);

        return redirect('/dashboard');
    }

    public function user_pict(Request $request, $id)
    {

        $user_photo = user_photo::find($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
