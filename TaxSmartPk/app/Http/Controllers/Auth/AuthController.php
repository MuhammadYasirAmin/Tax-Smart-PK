<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'UserName' => 'required',
            'UserEmail' => 'required|email',
            'UserPassword' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['status_code' => 400, 'message' => 'Bad Request => Validation Errors']);
        }

        $user = new User();
        $user->UserName = $request->UserName;
        $user->UserEmail = $request->UserEmail;
        $user->UserPhone = $request->UserPhone;
        $user->UserPassword = Hash::make($request->UserPassword);
        $user->UserCnic = $request->UserCnic;

        if ($user->save()) {
            return response()->json(['status_code' => 200, 'message' => 'User Created Successfully!']);
        } else {
            return response()->json(['status_code' => 400, 'message' => 'User Not Created!']);
        }
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'UserEmail' => 'required|email',
            'UserPassword' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['status_code' => 400, 'message' => 'Bad Request => Validations Failed']);
        }

        // $credentials = request(['UserEmail','UserPassword']);

        if (!Auth::attempt(['UserEmail','UserPassword'])) {
            return response()->json([
                'status_code' => 500,
                'message' => 'Unauthorized'
            ]);
        }

        $user = User::where('UserEmail', $request->UserEmail )->first();

        if ($user) {
            if (Hash::check($request->UserPassword, $user->UserPassword)) {
                $tokenResult = $user->createToken('authToken')->plainTextToken;

                if ($tokenResult) {
                    return response()->json(['status_code' => 200, 'token' => $tokenResult]);
                } else {
                    return response()->json(['status_code' => 400, 'message' => 'Token Not Created!']);
                }
            } else {
                return response()->json(['status_code' => 400, 'message' => 'Wrong Password']);
            }
        } else {
            return response()->json(['status_code' => 400, 'message' => 'User does\'nt Exist!']);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
                        'status_code' => 200,
                        'message' => 'Token Deleted Successfully!'
                    ]);
    }
}
