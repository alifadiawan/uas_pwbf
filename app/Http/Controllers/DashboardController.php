<?php

namespace App\Http\Controllers;

use App\Models\error_application;
use App\Models\menu_user;
use App\Models\User;
use App\Models\user_activity;
use App\Models\user_photo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $menuDetails = menu_user::where('user_id', Auth::id())->with('menu')->get();
        // return $menuDetails;

        $users = User::all();
        $recent_log = user_activity::latest()->paginate(4);

        return view('dashboard', compact('recent_log', 'users'));
    }

    public function users_dashboard()
    {

        $users = User::find(Auth::id());
        $recent_log = user_activity::latest()->paginate(4);

        return view('Guest.dashboard', compact('recent_log', 'users'));
    }

    public function errors_log()
    {

        $errors = error_application::paginate(10);

        return view('errorsLog', compact('errors'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
