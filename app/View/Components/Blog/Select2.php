<?php

namespace App\View\Components\Blog;

use Illuminate\View\Component;

class Select2 extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $dataOption;
    public function __construct($dataOption)
    {
        $this->dataOption = $this->make_data($dataOption);
    }
    public function make_data($data)
    {
        $r = [];
        foreach ($data as $key => $value) {
            array_push($r,['value'=>$value->id,'text'=>$value->name]);
        }
        return collect($r);
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.blog.select2');
    }
}
