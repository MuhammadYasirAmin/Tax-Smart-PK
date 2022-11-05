<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

use Illuminate\Http\Request;
use App\Models\WebModels\ContactForm;

class ContactUs extends Component
{
    public function render()
    {
        return view('livewire.frontend.contact-us')->layout('layouts.main');
    }

    public function submitContact(Request $request)
    {
        $ContactModel = new ContactForm();

        $ContactModel->UserName = $request->UserName;
        $ContactModel->UserEmail = $request->UserEmail;
        $ContactModel->UserSubject = $request->UserSubject;
        $ContactModel->UserPhone = $request->UserPhone;
        $ContactModel->UserMessage = $request->UserMessage;

        if ($ContactModel->save()) {
            return back()->with('Contact', 'Appointment has been Submitted.');
        } else {
            return back()->with('Contact', 'Appointment Not Submitted.');
        }
    }
}
