<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        return view('livewire.frontend.home-page')->layout('layouts.main');
    }

    public function DownlaodExcelForm()
    {
        $NTN_Form = public_path("/Form/NTN_Registration_Form.xlsx");
        $headers = ['Content-Type: application/xlsx'];
        return response()->download($NTN_Form, 'NTN_Registration_Form.xlsx', $headers);
    }
}
