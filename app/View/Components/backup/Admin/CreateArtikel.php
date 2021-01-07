<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class CreateArtikel extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $type_artikel;

    public function __construct($typeArtikel)
    {
        $this->type_artikel = $typeArtikel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.admin.create-artikel');
    }
}
