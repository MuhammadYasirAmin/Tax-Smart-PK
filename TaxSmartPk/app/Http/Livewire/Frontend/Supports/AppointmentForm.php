<?php

namespace App\Http\Livewire\Frontend\Supports;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\WebModels\UserAssets;
use App\Models\WebModels\UserBanks;
use App\Models\WebModels\UserIncomeFlows;
use App\Models\WebModels\UserNetAssets;
use App\Models\WebModels\UserOutFlows;
use App\Models\WebModels\UserProperty;
use App\Models\WebModels\UserVechile;

class AppointmentForm extends Component
{
    public function render()
    {
        return view('livewire.frontend.supports.appointment-form')->layout('layouts.main');
    }

    public function submitAppointments(Request $request)
    {
        $UserInfo = new User();
        $UserInfo->name = $request->FullName;
        $UserInfo->email = $request->UserEmail;
        $UserInfo->UserPhone = $request->UserPhone;
        $UserInfo->UserCnic = $request->CNICNumber;
        $UserInfo->UserRemarks = $request->RemarksAny;

        if ($UserInfo->save()) {
            // $Properties = new UserProperty();
            foreach ($request->PropertyDetail as $key => $value) {
                $insertQuery = "INSERT INTO `user_properties`(`Property_Details`, `last_year`, `current_year`, `user_id`) VALUES ('". $request->PropertyDetail[$key] ."', '".$request->P_TaxYear2021[$key]."', '".$request->P_TaxYear2022[$key]."', '".$UserInfo->id."')";
                DB::insert($insertQuery);
            }

            foreach ($request->BankAccount as $key => $value) {
                $insertQuery = "INSERT INTO `user_banks`(`Bank_Name`, `last_year`, `current_year`, `user_id`) VALUES ('". $request->BankAccount[$key] ."', '".$request->B_TaxYear2021[$key]."', '".$request->B_TaxYear2022[$key]."', '".$UserInfo->id."')";
                DB::insert($insertQuery);
            }

            foreach ($request->Vehciles as $key => $value) {
                $insertQuery = "INSERT INTO `user_vechiles`(`Reg_No`, `last_year`, `current_year`, `user_id`) VALUES ('". $request->Vehciles[$key] ."', '".$request->V_TaxYear2021[$key]."', '".$request->V_TaxYear2022[$key]."', '".$UserInfo->id."')";
                DB::insert($insertQuery);
            }

            foreach ($request->OtherAssets as $key => $value) {
                $insertQuery = "INSERT INTO `user_assets`(`User_Assets`, `last_year`, `current_year`, `user_id`) VALUES ('". $request->OtherAssets[$key] ."', '".$request->O_TaxYear2021[$key]."', '".$request->O_TaxYear2022[$key]."', '".$UserInfo->id."')";
                DB::insert($insertQuery);
            }

            foreach ($request->Income as $key => $value) {
                $insertQuery = "INSERT INTO `user_reconcilations`(`User_Income`, `last_year`, `current_year`, `user_id`) VALUES ('". $request->Income[$key] ."', '".$request->I_TaxYear2021[$key]."', '".$request->I_TaxYear2022[$key]."', '".$UserInfo->id."')";
                DB::insert($insertQuery);
            }

            foreach ($request->OutFlows as $key => $value) {
                $insertQuery = "INSERT INTO `user_out_flows`(`OutFlows`, `last_year`, `current_year`, `user_id`) VALUES ('". $request->OutFlows[$key] ."', '".$request->OF_TaxYear2021[$key]."', '".$request->OF_TaxYear2022[$key]."', '".$UserInfo->id."')";
                DB::insert($insertQuery);
            }

            // foreach ($request->NetAssets as $key => $value) {
            //     $insertQuery = "INSERT INTO `user_net_assets`(`Net_Assets`, `Asset_Amount`, `user_id`) VALUES ('". $request->NetAssets[$key] ."', '".$request->AssetAmount[$key]."', '".$UserInfo->id."')";
            //     DB::insert($insertQuery);
            // }

            return redirect('/NTN-Submitted-Form/' .$UserInfo->id. '/View-PDF')->with('Appointment', 'Form has been Submitted.');
        } else {
            return back()->with('Appointment', 'Appointment Not Submitted.');
        }
    }
}
