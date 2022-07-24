<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function register(RegisterRequest $request){
        
        $user = User::create(
            attributes: $request->only('name', 'email')
            +[
                'password' => \Hash::make($request->input('password'))
            ]
        );
        
        return response($user, status:Response::HTTP_CREATED);

    }

    public function login(Request $request){

        if(!\Auth::attempt($request->only('email','password'))){

            return response([
                'error'=>'invalid credentials'
            ], status:Response::HTTP_UNAUTHORIZED);
        }

        $user = \Auth::user();
        
        $jwt = $user->createToken('token')->plainTextToken;

        $cookie = cookie('jwt', $jwt, 60 * 24);

        return response([
            'message'=>'success'
        ])->withCookie($cookie);
    }

    public function user(Request $request){
        return $request->user();
    }

    public function logout(){
        $cookie = \Cookie::forget('jwt');

        return response([
            'message'=>'success'
        ])->withCookie($cookie);

    }
}
