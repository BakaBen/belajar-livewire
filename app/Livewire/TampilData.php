<?php

namespace App\Livewire;

use App\Models\Feedback;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.app')]
class TampilData extends Component
{
    use WithPagination;

    public string $search = '';

    public function render()
    {
        $feedback = Feedback::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', "%{$this->search}%")
                    ->orWhere('email', 'like', "%{$this->search}%");
            })
            ->latest()
            ->paginate(10);

        return view('livewire.tampil-data', [
            'feedback' => $feedback,
        ]);
    }
}