<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class AlertError extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $html = '';
    public function __construct($error)
    {
        $this->show_error($error);
    }
    protected function show_error($err)
    {
        $this->html .= '<strong>Error :</strong> ';
        $this->html .= '<ul class="list-inline list-unstyled">';
        foreach ($err as $key => $value) {
            $this->html .= '<li><i class="fa fa-check-square"></i> ';
            $this->html .= $value;
            $this->html .= '</li>';
        }
        $this->html .= '</ul>';
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return <<<'blade'
            <div class="col-lg-12 alert-notif">
                <div class="alert alert-danger margin-bottom-30"><!-- DANGER -->
                    {!! $html !!}
                </div>
            </div>
            @section('script')
            <script>
                jQuery(function(){ 
                    setTimeout(function(){ $('.alert-notif').fadeOut(1000) },4000) 
                })
            </script>
            @endsection
        blade;
    }
}
