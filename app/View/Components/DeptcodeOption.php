<?php

namespace App\View\Components;

use App\Models\DeptInfo;
use Illuminate\View\Component;

class DeptcodeOption extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($value = null)
    {
        $this->data['depts'] = DeptInfo::pluck('deptname', 'deptcode');
        $this->data['value'] = $value ?? old('deptcode');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.deptcode-option', $this->data);
    }
}
