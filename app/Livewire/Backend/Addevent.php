<?php

namespace App\Livewire\Backend;

use Livewire\Component;

class Addevent extends Component
{
    public $openform=false;
    public function render()
    {
        return view('livewire.backend.addevent');
    }
}
