<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\LoginRequest;
use App\Http\Requests\Api\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends BaseController
{
    //user login
    public function login(LoginRequest $request){
        $user = User::where('email', $request->email)->first();
        if($user){
            if (Hash::check($request->password, $user->password)) { //check password
                $token = $user->createToken('Token')->accessToken;
                return $this->sendResponse(["access_token" => $token]);
            }else{
                return $this->sendValidationError('authentication', __('messages.auth_failed'), 401);             
            }
        }else{
            return $this->sendValidationError('email', 'This email not registered', 422);            
        }
    }

    //user registation
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
        return $this->sendResponse(["access_token" => $token]);
    }

    //logout user
    public function logout(Request $request)
    {
       $user = $request->user();
       if ($user) {
          $token = $request->user()->token();
          $token->revoke();
          return $this->sendResponse([]);
       }
       return $this->sendError(__('messages.went-wrong'), 500);
    }

    //get user profile
    public function profile(Request $request)
    {
       $user = $request->user();       
       if ($user) {
          $userData = User::where('id',$user->id)->select('name','email','mobile')->first();
          
          return $this->sendResponse($userData);
       }
       return $this->sendError(__('messages.went-wrong'), 500);
    }
}
