<?php

namespace App\Livewire;

use App\Models\Dosen;
use Livewire\Component;
use Livewire\WithPagination;

class DosenTable extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.dosen-table', [
            'dosens' => Dosen::paginate(10),
        ]);
    }
}
