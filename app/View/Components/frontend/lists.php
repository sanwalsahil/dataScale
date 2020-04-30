<?php

namespace App\View\Components\frontend;

use Illuminate\View\Component;

class lists extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $data;
    public $nameRedirect;
    public $action1Redirect;
    public $subtext;
    public function __construct($data=null,$nameRedirect=null,$action1Redirect=null,$subtext=null)
    {
        //
        $this->data = $data;
        $this->nameRedirect = $nameRedirect;
        $this->action1Redirect = $action1Redirect;
        $this->subtext = $subtext;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.frontend.lists',['data'=>$this->data]);
    }
}
