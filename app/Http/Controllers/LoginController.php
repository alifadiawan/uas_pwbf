<?php

namespace App\Http\Controllers;

use App\Models\error_application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\user_activity;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;


class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {

        try {
            $data = [
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ];
           
            // throw new \Exception('This is a test exception.');

            if (Auth::Attempt($data)) {

                user_activity::create([
                    'user_id' => Auth::id(),
                    'status' => 'SUCCESS',
                    'deskripsi' => $request->name . ' Melakukan LOGIN',
                    'function' => __FUNCTION__,
                    'method' => $request->method()
                ]);

               return redirect()->intended();
            } else {
                Session::flash('error', 'Email atau Password Salah');
                return redirect('/');
            }
        } catch (\Exception $e) {

            $data = [
                'user_id' => Auth::id() ?? NULL,
                'errors_date' => now(),
                'controller' => Route::currentRouteAction(),
                'function' => __FUNCTION__,
                'error_line' => $e->getLine(),
                'error_message' => $e->getMessage(),
                'status' => 'ERROR',
                'param' => json_encode($request->all())
            ];
            // return $data;    
            error_application::create($data);


            Session::flash('error', 'Terjadi kesalahan pada sistem. Silakan coba lagi nanti.');
            return redirect('/');
        }
    }
    public function logout(Request $request)
    {
        user_activity::create([
            'user_id' => Auth::id(),
            'status' => 'SUCCESS',
            'deskripsi' => $request->name . ' melakukan LOGOUT',
            'function' => __FUNCTION__,
            'method' => $request->method()
        ]);

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
