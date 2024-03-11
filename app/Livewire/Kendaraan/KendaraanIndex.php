<?php

namespace App\Livewire\Kendaraan;

use App\Models\Kendaraan;
use Livewire\Component;

class KendaraanIndex extends Component
{
    public function render()
    {
        return view('livewire.kendaraan.kendaraan-index', [
            'kendaraans' => Kendaraan::all()
        ]);
    }
}
