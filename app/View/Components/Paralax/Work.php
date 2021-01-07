<?php

namespace App\View\Components\Paralax;

use Illuminate\View\Component;

class Work extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $galery;
    public function __construct($galery)
    {
        $this->galery = $galery;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.paralax.work');
    }
}
