<?php

namespace App\Http\Livewire;

use App\Models\Vente;
use Livewire\Component;

class TestWithDb extends Component
{
    public function render()
    {
        $dates = Vente::select('date')->get();
        return view('livewire.test-with-db');
    }
}
