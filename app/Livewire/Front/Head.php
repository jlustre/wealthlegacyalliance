<?php

namespace App\Livewire\Front;

use Livewire\Component;

class Head extends Component
{
    public $title = '';

    public function render()
    {
        return view('livewire.front.head');
    }
}
