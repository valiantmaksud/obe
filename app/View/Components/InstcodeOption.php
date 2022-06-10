<?php

namespace App\View\Components;

use App\Models\Institute;
use Illuminate\View\Component;

class InstcodeOption extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($value = null)
    {
        $this->data['inst'] = Institute::pluck('institutename', 'institutecode');
        $this->data['value'] = $value ?? old('institutecode');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.instcode-option', $this->data);
    }
}
