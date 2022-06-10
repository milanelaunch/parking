<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\LoginRequest;
use App\Http\Requests\Api\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends BaseController
{
    public function login(LoginRequest $request){
        $user = User::where('email', $request->username)->first();
        if($user){
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('Token')->accessToken;
                return response()->json($token, 200);
            }else{
                return $this->sendValidationError('authentication', __('messages.auth_failed'), 401);             
            }
        }else{
            return $this->sendValidationError('email', 'This email not registered', 422);            
        }
    }

    public function register(RegisterRequest $request){
        $user = User::create([            
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' => $request->name,
            'mobile' => $request->mobile,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);
        $token = $user->createToken('Token')->accessToken;
        return response()->json($token, 200);
    }
}
