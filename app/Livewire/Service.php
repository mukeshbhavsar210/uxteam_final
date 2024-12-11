<?php

namespace App\Livewire;

use App\Models\Industry;
use App\Models\Service as ModelsService;
use Livewire\Component;

class Service extends Component {
    public function render()
    {
        $services = ModelsService::
            orderBy('project_name','DESC')->get();

        return view('livewire.service', [
            'services' => $services,
        ]);
    }
}
