<?php

namespace App\Http\Livewire\Frontend\Supports;

use Livewire\Component;

class OurProcess extends Component
{
    public function render()
    {
        return view('livewire.frontend.supports.our-process')->layout('layouts.main');
    }
}
