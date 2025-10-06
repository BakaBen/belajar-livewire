<?php

namespace App\Livewire;

use App\Models\Feedback;
use Livewire\Component;

class FeedbackForm extends Component
{
    public $name, $email, $feedback;

    public function submitFeedback()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'feedback' => 'required|string',
        ]);

        Feedback::create([
            'name' => $this->name,
            'email' => $this->email,
            'feedback' => $this->feedback,
        ]);

        $this->reset();

        session()->flash('message', 'Feedback berhasil dikirim!');
    }
    
    public function render()
    {
        return view('livewire.feedback-form');
    }
}
