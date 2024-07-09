<?php

namespace App\Http\Controllers\Auth;

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            $redirectUrl = '';

            if ($user->role == 1) {
                $redirectUrl = url('admin/dashboards');
            } elseif ($user->role == 2) {
                $redirectUrl = url('user/dashboards');
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'User role is not defined'
                ], 401);
            }

            return response()->json([
                'success' => true,
                'redirect_url' => $redirectUrl
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User atau password salah'
            ], 401);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Pass the values to the view
        return view('login', []);
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
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Login $login)
    {
        //
    }
}
