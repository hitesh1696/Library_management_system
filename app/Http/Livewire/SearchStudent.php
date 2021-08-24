<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class SearchStudent extends Component
{
    public $search = '';
    public $student_id = '';
    public function save($id)
    {
        $this->student_id = $id;
        
    }
    public function render()
    {
        $searchResults = [];

        if (strlen($this->search) >= 2) {
            $searchResults = Student::where('first_name','like','%'.$this->search.'%' )->get();
            // dd($searchResults);
        }

        return view('livewire.search-student', [
            'searchResults' => collect($searchResults),
        ]);
    }
}
