<?php

namespace App\View\Components\Blog;

use Illuminate\View\Component;

class Grid extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $option;
    public function __construct($option)
    {
        $this->option = $option;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.blog.grid');
    }
}
