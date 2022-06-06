<?php

namespace App\Http\Livewire\NewsLetter;

use App\Models\NewsLetter;
use Livewire\Component;

class NewsLetterComponent extends Component
{
    public function render()
    {
        $newsLetter = NewsLetter::paginate(10);
        return view('livewire.news-letter.news-letter-component',[
            'newsLetter' => $newsLetter
        ]);
    }
}
