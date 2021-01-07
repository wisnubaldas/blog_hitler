<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tes extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $nama;
    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.tes');
    }
}
