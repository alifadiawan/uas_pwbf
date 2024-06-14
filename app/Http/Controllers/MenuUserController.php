<?php

namespace App\Http\Controllers;

use App\Models\menu_user;
use App\Models\User;
use Illuminate\Http\Request;

class MenuUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user = user::all();
        // $menuUsers = menu_user::find()

        return view('usersPrivileges', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(menu_user $menu_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(menu_user $menu_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, menu_user $menu_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(menu_user $menu_user)
    {
        //
    }
}
