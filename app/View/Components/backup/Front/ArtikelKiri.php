<?php

namespace App\View\Components\Front;

use Illuminate\View\Component;

class ArtikelKiri extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return <<<'blade'
<div class="vc_column-inner">
    <div class="wpb_wrapper">
        <div class="mgt-promo-block-container wpb_content_element">
            <div class="mgt-promo-block-wrapper mgt-promo-block-shadow mgt-promo-block-hover">
                <div
                    class="mgt-promo-block black-text cover-image no-darken mgt-promo-block-76946044"
                    data-style="background-color: #f5f5f5;background-image: url(upload/woman-business-tekephone.jpg);background-repeat: no-repeat;height: 245px;"
                >
                    <div class="mgt-promo-block-content va-middle"><div class="mgt-promo-block-content-inside"></div></div>
                </div>
            </div>
        </div>
        <div
            class="mgt-header-block clearfix text-left text-black wpb_content_element mgt-header-block-style-2 mgt-header-block-fontsize-regular mgt-header-texttransform-subheader mgt-header-block-41891305"
        >
            <h3 class="mgt-header-block-title text-font-weight-default">About our Company</h3>
            <div class="mgt-header-line mgt-header-line-margin-small"></div>
        </div>
        <div class="wpb_text_column wpb_content_element vc_custom_1489487414570">
            <div class="wpb_wrapper">
                <p>Our goal is simple, to make things that people care about. We were founded on this principle and we will always be commited to it.</p>
            </div>
        </div>
        <div class="mgt-button-wrapper mgt-button-wrapper-align-center mgt-button-wrapper-display-inline mgt-button-top-margin-false mgt-button-right-margin-false mgt-button-round-edges-small">
            <a
                class="btn hvr-grow mgt-button-icon-true mgt-button mgt-style-borderedgrey mgt-size-normal mgt-align-center mgt-display-inline mgt-text-size-small mgt-button-icon-separator-true mgt-button-icon-position-right text-font-weight-default mgt-text-transform-none"
                href="#"
            >
                Read more<i class="entypo-icon entypo-icon-right-open"></i>
            </a>
        </div>
    </div>
</div>
blade;
    }
}
