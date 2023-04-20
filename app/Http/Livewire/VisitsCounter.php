<?php

namespace App\Http\Livewire;

use Livewire\Component;

class VisitsCounter extends Component
{
    public $count = 1;

    public function increment($amount = 1)
    {
        $this->count += $amount;
    }

    public function render()
    {
        return view('livewire.visits-counter', [
            'count' => $this->count,
        ]);
    }
}
