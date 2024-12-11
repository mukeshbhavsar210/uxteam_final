<?php

namespace App\Livewire;

use App\Models\Work as ModelsWork;
use Livewire\Component;

class Work extends Component
{
    public function render()
    {
        $works = ModelsWork::get();
        return view('livewire.work', [
            'works' => $works
        ]);
    }
}
