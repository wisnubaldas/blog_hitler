<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TumbArtikel extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    /* public $image;
    public $writer;
    public $date;
    public $comment;
    public $title;
    public $body;
    public $link;
    public $id; */
    public $artikel;
    public function __construct($artikel)
    {
        /* $this->image = $image; 
        $this->writer = $writer;
        $this->date = $date;
        $this->comment = $comment;
        $this->title = $title;
        $this->body = $body;
        $this->link = $link;
        $this->id = $id; */
        $this->artikel = $artikel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.tumb-artikel');
    }
    
}
