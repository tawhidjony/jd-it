<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class ContactComponent extends Component
{
    public function render()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(10);
        return view('livewire.contact.contact-component', ['contacts' => $contacts]);
    }
}
