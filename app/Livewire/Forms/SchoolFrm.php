<?php

namespace App\Livewire\Forms;

use App\Models\School;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SchoolFrm extends Form
{
    protected $school;
    //
     #[Validate('required')]
    public $name = '';

    
    public function store(){
        $this->validate();
        School::create([
            'name' => $this->name
        ]);
    }

    // public function setSchhol($school = null)
    // {
    //     $this->school = $school;
    //     // $this->name = $school->name;
    // }


    //  public function update()
    // {
    //     $this->school->update(
    //         $this->all()
    //     );
    // }
}
