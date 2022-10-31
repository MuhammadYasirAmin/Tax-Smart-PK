<?php

namespace App\Http\Livewire\Frontend\Advisors;

use Livewire\Component;

class AdvisorDetail extends Component
{
    public function render()
    {
        return view('livewire.frontend.advisors.advisor-detail')->layout('layouts.main');
    }
}
