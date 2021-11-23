<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        //get request parameters
        $username = $request->username;
        $password = $request->password;

        $credentials = array(
            'phone' => $username,
            'password' => $password
        );

        //authenticate user credentials
        if (Auth::attempt($credentials)) {

            //return success message: successMsg function defined in HelperController
            return HelperController::successMsg( 
                [
                'user' => auth()->user(),
                'token' => auth()->user()->createToken('API Token')->plainTextToken //if logged in successfully then generate token which will be used to authenticate incoming requests from app
                ], 
                'Login successfully'
            );

        } else {
            // Otherwise return error message: errorMsg function defined in HelperController
            return HelperController::errorMsg('Credentials not match', 401);

        }
    }
}
