<?php

namespace App\Http\Livewire\Frontend\Services;

use Livewire\Component;

class TaxService extends Component
{
    public function render()
    {
        return view('livewire.frontend.services.service-detail')->layout('layouts.main');
    }
}
