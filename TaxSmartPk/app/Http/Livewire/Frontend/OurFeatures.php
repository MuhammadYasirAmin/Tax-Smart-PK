<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class OurFeatures extends Component
{
    public function render()
    {
        return view('livewire.frontend.our-features')->layout('layouts.main');
    }
}
