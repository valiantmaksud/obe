<?php

namespace App\View\Components;

use App\Models\Semister as SemisterModel;

use Illuminate\View\Component;

class SemisterOption extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($value = null)
    {
        $this->data['semisters'] = SemisterModel::pluck('semister');
        $this->data['value'] = $value ?? old('semister');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.semister-option', $this->data);
    }
}
