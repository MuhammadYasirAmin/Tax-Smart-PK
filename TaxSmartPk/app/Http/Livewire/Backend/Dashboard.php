<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public function render(Request $request)
    {
        if (Auth::user()) {
            $NTN_User_Data = User::with("userProperties", "userBanks", "userVehciles", "userAssets", "userIncomeFlows", "userOutFlows", "userNetAssets")->orderBy('id', 'DESC')->get();
            // dd($NTN_User_Data);
            return view('livewire.backend.dashboard', compact('NTN_User_Data'));
        }
        return redirect()->route('Backend.LoginForm');
    }
}
