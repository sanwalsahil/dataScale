<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Banner1 extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $bgUrl;

    public function __construct($bgUrl)
    {
        //
        $this->bgUrl = $bgUrl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.frontend.banner1');
    }
}
