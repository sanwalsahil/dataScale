<?php

namespace App\View\Components\frontend;

use Illuminate\View\Component;

class searchBar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $popular;
    public $dropdowns;
    public function __construct($popular=null,$dropdowns=null)
    {
        //
        $this->popular = $popular;
        $this->dropdowns = $dropdowns;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.frontend.search-bar');
    }
}
