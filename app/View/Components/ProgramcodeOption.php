<?php

namespace App\View\Components;

use App\Models\Program;
use Illuminate\View\Component;

class ProgramcodeOption extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($value= null)
    {
        $this->data['programs'] = Program::pluck('programname', 'programcode');
        $this->data['value'] = $value ?? old('programcode');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.programcode-option', $this->data);
    }
}
