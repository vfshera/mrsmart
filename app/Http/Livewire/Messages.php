<?php

namespace App\Http\Livewire;

use App\Models\ContactMessage;
use Livewire\Component;

class Messages extends Component
{

    public $messages;


    public function mount(){
        $this->messages = ContactMessage::all();
    }

    public function render()
    {

        return view('livewire.messages');
    }
}