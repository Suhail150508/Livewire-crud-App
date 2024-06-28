<?php

namespace App\Livewire;

use Livewire\Component;

class Customer extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public function render()
    {
        return view('livewire.customer');
    }
    public function test(){

        
        dd($this->all());
    }
}
