<?php

namespace App\Http\Livewire\Frontend\Supports;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\WebModels\AppointmentFormModel;

class AppointmentForm extends Component
{
    public function render()
    {
        return view('livewire.frontend.supports.appointment-form')->layout('layouts.main');
    }

    public function submitAppointments(Request $request)
    {
        $AppointmentModel = new AppointmentFormModel();

        $AppointmentModel->FirstName = $request->FirstName;
        $AppointmentModel->LastName = $request->LastName;
        $AppointmentModel->UserEmail = $request->UserEmail;
        $AppointmentModel->UserPhone = $request->UserPhone;
        $AppointmentModel->SelectAdvisor = $request->SelectAdvisor;
        $AppointmentModel->SelectDate = $request->SelectDate;
        $AppointmentModel->UserMessage = $request->UserMessage;

        if ($AppointmentModel->save()) {
            return back()->with('Appointment', 'Appointment has been Submitted.');
        } else {
            return back()->with('Appointment', 'Appointment Not Submitted.');

        }
    }
}
