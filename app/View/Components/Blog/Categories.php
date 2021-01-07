<?php

namespace App\View\Components\Blog;

use Illuminate\View\Component;
use App\Models\TypeArtikel;
class Categories extends Component
{
    public $categories;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->categories = TypeArtikel::with('artikel')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.blog.categories');
    }
}
