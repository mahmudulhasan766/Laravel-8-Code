<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MyCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $msg;
    public function __construct($message)
    {
        $this->msg = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.my-card');
    }
}
