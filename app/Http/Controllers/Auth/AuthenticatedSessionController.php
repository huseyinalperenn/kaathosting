<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class AuthenticatedSessionController extends Controller
{
    public function index()
    {

    }

    public function store(LoginRequest $request)
    {
        $key = 'example_key';
        $jwt = $request->input("token");
        $credentials = JWT::decode($jwt, new Key($key, 'HS256'));
        $user = Auth::loginUsingId($credentials->id);

        return response()->json(["message" => "success"]);
    }
}
