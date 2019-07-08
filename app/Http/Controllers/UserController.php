<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Technician;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function authenticateAdminAndTechnicians(Request $request)
    {
        $password = $request->input('password');
        $email = $request->input('email');

        $user = DB::table('users')
            ->where('email', $email)
            ->where(function ($query) {
                return $query->where('role', 'admin')
                    ->orWhere('role', '=', 'technician');
            })->first();

        if ($user) {
            if (Hash::check($password, $user->password)) {
                $technician = Technician::where('email', '=', $email)->first();
                $data = [
                    'user' => $user,
                    'technician' => $technician,
                ];
                return response()->json($data);
            } else {
                return response()->json([
                    "message" => "Password is incorrect. Try again",
                ], 422);
            }
        }

        return response()->json([
            "message" => "E-mail not found or you are not allowed. Only Authorized users can login"
        ], 404);
    }

    public function authenticateUsers(Request $request)
    {
        $password = $request->input('password');
        $email = $request->input('email');

        $user = DB::table('users')
            ->where('email', $email)
            ->where('role', 'user')
            ->first();

        if ($user) {
            if (Hash::check($password, $user->password)) {
                return response()->json($user);
            } else {
                return response()->json([
                    "message" => "Password is incorrect. Try again",
                ], 422);
            }
        }

        return response()->json([
            "message" => "E-mail not found. Try again",
        ], 422);
    }

    public function logout()
    {
        Auth::logout();
    }

    public function register(Request $request)
    {
        $messages = [
            'email.required' => 'Your e-mail address is required!',
            'email.email' => 'Your e-mail is invalid!',
            'email.unique' => 'The e-mail is already taken!',
            'f_name.required' => 'Your first name is required!',
            'l_name.required' => 'Your last name is required!',
            'password.required' => 'Password is required!',
            'password.confirmed' => 'Passwords do not match!',
        ];

        Validator::make($request->all(), [
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'bail|required|confirmed',
        ], $messages);

        return User::create([
            'f_name' => $request->input('f_name'),
            'l_name' => $request->input('l_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'role' => 'user',
            'password' => Hash::make($request->input('password')),
        ]);
    }

    protected function guard()
    {
        return Auth::guard();
    }
}
