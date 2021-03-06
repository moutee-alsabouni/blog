<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login', function(Request $request){
    $credentials = $request->validate([
        'email' => ['required|email'],
        'password' => ['required'],
    ]);
    if(Auth::attempt($credentials)){
        $user = Auth::user();
        $user->tokens()->delete();
        $token = $user->createToken('auth');
        return [
            'message' => 'Login done',
            'data' => [
                'token' => $token->plainTextToken
            ]
            ];
    }
    return [
        'message' => 'Credentials do not match our records'
    ];
});
