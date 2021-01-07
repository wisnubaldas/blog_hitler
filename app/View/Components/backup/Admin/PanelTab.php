<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class PanelTab extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $dataTab;
    public function __construct($title,$data)
    {
        $this->title = $title;
        $this->dataTab = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return <<<'blade'
        <div id="panel-misc-portlet-l2" class="panel panel-default">
        <div class="panel-heading">
            <span class="elipsis"><!-- panel title -->
                <strong>{{$title}}</strong>
            </span>
            <!-- tabs nav -->
            <ul class="nav nav-tabs pull-right">
                @foreach($dataTab['title'] as $i)
                    @if($loop->first)
                        <li class="active"><!-- TAB 1 -->
                            <a href="#tab-{{$loop->index}}" data-toggle="tab">{{$i}}</a>
                        </li>
                    @else
                        <li><!-- TAB 1 -->
                            <a href="#tab-{{$loop->index}}" data-toggle="tab">{{$i}}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
            <!-- /tabs nav -->
        </div>
        <div class="panel-body">
            <div class="tab-content transparent">
                    <div id="" class="tab-pane active">
                        <p>sdasdasd</p>
                    </div>
            </div>
        </div>
    </div>
blade;
    }
}
