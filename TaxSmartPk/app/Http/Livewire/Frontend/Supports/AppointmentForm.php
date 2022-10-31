<?php

namespace App\Http\Livewire\Frontend\Supports;

use Livewire\Component;

class AppointmentForm extends Component
{
    public function render()
    {
        return view('livewire.frontend.supports.appointment-form')->layout('layouts.main');
    }
}
