<?php

namespace App\Http\Controllers;

use App\Models\user_activity;
use Illuminate\Http\Request;
use App\Models\user_photo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $activity = user_activity::latest()->paginate(15);

        $user_activities = DB::table('user_activities')
                    ->join('users', 'user_activities.user_id', '=', 'users.id')
                    ->get();

        return view('activityLog', compact('activity','user_activities'));
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
    public function show(user_activity $user_activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user_activity $user_activity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user_activity $user_activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user_activity $user_activity)
    {
        //
    }
}
