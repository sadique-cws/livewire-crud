<?php

namespace App\Http\Livewire;
use App\Models\Record;
use Livewire\Component;

class CallingRecords extends Component
{

    public $records;

    public function mount(){
        $this->records = Record::all();
    }

    public function delete($record_id){
        $record = Record::find($record_id);
        $record->delete();
        
        $this->mount();
    }
    public function render()
    {
        return view('livewire.calling-records');
    }
}
