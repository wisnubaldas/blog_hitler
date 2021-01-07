<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TutorialThumb extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $artikel;
    public function __construct($artikel)
    {
        $this->artikel = $artikel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.tutorial-thumb');
    }
}
