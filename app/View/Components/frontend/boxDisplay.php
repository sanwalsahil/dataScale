<?php

namespace App\View\Components\frontend;

use Illuminate\View\Component;

class boxDisplay extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $categories;
    public function __construct($categories)
    {
        //
        $this->categories = $categories;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.frontend.box-display');
    }
}
