<?php

namespace App\Http\Livewire\UsersPDF;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use App\Models\User;

class NtnFormPdf extends Controller
{
    public function render(Request $request)
    {
        $NTN_User_Data = User::with("userProperties", "userBanks", "userVehciles", "userAssets", "userIncomeFlows", "userOutFlows", "userNetAssets")->where('id', $request->user_id)->first();
        // dd($NTN_User_Data);
        return view('livewire.users-p-d-f.ntn-form-pdf', compact('NTN_User_Data'));
    }

    public function generatePDF(Request $request)
    {
        $NTN_User_Data = User::with("userProperties", "userBanks", "userVehciles", "userAssets", "userIncomeFlows", "userOutFlows", "userNetAssets")->where('id', $request->user_id)->first();
        $NTN_User_PDF = PDF::loadView('livewire.users-p-d-f.ntn-form-pdf', compact('NTN_User_Data'));
        // $PDF_Name = $NTN_User_Data->name.'.pdf';
        return $NTN_User_PDF->download('PDF_Name.pdf');
    }
}
