<?php

namespace App\View\Components\Blog;

use Illuminate\View\Component;

class Notification extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $text;
    public $title;
    public function __construct($title,$text)
    {
        $this->text = $text;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.blog.notification');
    }
}
