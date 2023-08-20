<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin/auth/index');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'token' => [
                'required',
                'string',
                Rule::in([env('APP_NAME') . '-token-2023']),
            ],
            'name' => 'required|string',
            'email' => [
                'required',
                'email',
                Rule::unique('users')
            ],
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return response()->json($user);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.index')->with('success', 'Login successfully');
        }

        return redirect()->route('admin.auth.index')->with('error', 'Login failed');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.auth.index');
    }
}
