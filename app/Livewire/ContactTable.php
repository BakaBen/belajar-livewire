<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ContactTable extends Component
{
    use WithPagination;

    public function render()
    {
        $contacts = Contact::orderBy('created_at', 'asc')->paginate(10);
        return view('livewire.contact-table', [
            'contacts' => $contacts,
        ]);
    }
}