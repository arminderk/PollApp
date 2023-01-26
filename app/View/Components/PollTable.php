<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PollTable extends Component
{
    public $polls;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($polls)
    {
        $this->polls = $polls;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.poll-table');
    }
}
