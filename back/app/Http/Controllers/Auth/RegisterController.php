<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    public function register(RegisterRequest $request)
    {
        $user =User::registerUser($request->validated());
        Auth::login($user);
        return response()->json(['message' => 'user register successfully'], 201);

    }
}

