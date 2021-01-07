<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ArtikelTag extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $tag;
    public function __construct($tag)
    {
        $this->tag = $tag;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return <<<'blade'
@foreach($tag as $i)
<a href="artikel?tag={{$i->name}}" rel="tag">{{$i->name}}</a>
@endforeach
blade;
    }
}
