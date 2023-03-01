<?php

namespace App\Http\Livewire;
use App\Models\Record;
use Livewire\Component;

class InsertForm extends Component
{
    public $name, $contact;

    public function store(){
        $r = new Record();
        $r->name = $this->name;
        $r->contact = $this->contact;
        $r->save();

        $this->name = $this->contact = '';
    }

    public function render()
    {
        return view('livewire.insert-form');
    }
}
