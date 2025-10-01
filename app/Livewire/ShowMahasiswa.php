<?php

namespace App\Livewire;

use App\Models\Mahasiswa;
use Livewire\Component;
use Livewire\WithPagination;

class ShowMahasiswa extends Component
{
    public function render()
    {
        $data = Mahasiswa::paginate(10);
        return view('livewire.show-mahasiswa', compact('data'));
    }
}
