<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class Contact extends Component
{
    public $error="";

    public function contactdb(){
        $this->error="success";
    }




    public function render()
    {
        return view('livewire.frontend.contact');
    }
}
