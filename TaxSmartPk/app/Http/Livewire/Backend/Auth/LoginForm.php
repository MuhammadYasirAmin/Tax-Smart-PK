<?php

namespace App\Http\Livewire\Backend\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginForm extends Component
{
    public function render()
    {
        return view('livewire.backend.auth.login-form');
    }

    public function LoginSubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
                    'ADM_Email' => 'required|email',
                    'ADM_Password' => 'required'
                ]);

        if ($validator->fails()) {
            return back()->with('Error!', '400 Bad Request \n Validations Failed');
        }

        if (!Auth::attempt(['email' => $request->ADM_Email, 'password' => $request->ADM_Password])) {
            return back()->with('Error!', 'UnAuthorized \n Bad Request');
        }

        $user = User::where('email', $request->ADM_Email)->first();

        if ($user) {
            if (Hash::check($request->ADM_Password, $user->password)) {
                // $tokenResult = $user->createToken('authToken')->plainTextToken;

                // if ($tokenResult) {
                return redirect()->route('Admin.Dashboard')->with('Success!', 'Admin Login Successfully!');
            // } else {
                //     return back()->with('Error!', '400 Bad Request \n Token Not Created!');
            // }
            } else {
                return back()->with('Error!', '400 Bad Request \n Wrong Password!');
            }
        } else {
            return back()->with('Error!', '400 Bad Request \n User does\'nt Exist! \n Invalid Email!');
        }
    }

    public function AdminLogout(Request $request)
    {
        Auth::logout();
        return redirect()->route('Admin.Logout')->with('Success!', 'Admin LogOut Successfully!');
    }
}
