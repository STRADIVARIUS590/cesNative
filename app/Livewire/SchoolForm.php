<?php

namespace App\Livewire;

use App\Livewire\Forms\SchoolFrm;
use App\Models\School;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
 
class SchoolForm extends Component
{
    // #[Validate('required')]
    // public $name = '';

    public SchoolFrm $form;

    public function render()
    {
        return view('livewire.school-form');
    }

    public function save()
    {
        $this->form->store();
    }

 
}
