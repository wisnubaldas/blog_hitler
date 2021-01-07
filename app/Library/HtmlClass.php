<?php
use Illuminate\Support\Facades\View;
use App\Models\TypeArtikel;
class HtmlClass  
{
    public $bodyClass;
    public $boxedLayout;
    public $paceTop;
    public $bodyExtraClass;
    public $sidebarHide;
	public $sidebarTwo;
	public $sidebarRight;
	public $sidebarLight;
	public $sidebarWide;
	public $sidebarMinified;
    public $topMenu;
    public $footer;
    public $pageContainerClass;
    public $contentClass;
    public $contentFullHeight;
    public $contentFullWidth;
    public $contentInverseMode;
    public $headerClass;
    public $headerMenu;
    public $hiddenSearch;
    public $headerMegaMenu;
    public $headerInverse;
    public $headerLanguageBar;
	public $sidebarTransparent;
	
    public function __construct(array $arr = []) {
        // $this->boot();
    }
    public function boot()
    {
        $this->bodyClass = ($this->boxedLayout) ? 'boxed-layout' : '';
        $this->bodyClass .= ($this->paceTop) ? 'pace-top ' : '';
        $this->bodyClass .= ($this->bodyExtraClass) ? $this->bodyExtraClass . ' ' : '';
        $this->sidebarHide = ($this->sidebarHide) ? $this->sidebarHide : '';
        $this->sidebarTwo = ($this->sidebarTwo) ? $this->sidebarTwo : '';
        $this->topMenu = ($this->topMenu) ? $this->topMenu : '';
        $this->footer = ($this->footer) ? $this->footer : '';
        
        $this->pageContainerClass = ($this->topMenu) ? 'page-with-top-menu ' : '';
        $this->pageContainerClass .= ($this->sidebarRight) ? 'page-with-right-sidebar ' : '';
        $this->pageContainerClass .= ($this->sidebarLight) ? 'page-with-light-sidebar ' : '';
        $this->pageContainerClass .= ($this->sidebarWide) ? 'page-with-wide-sidebar ' : '';
        $this->pageContainerClass .= ($this->sidebarHide) ? 'page-without-sidebar ' : '';
        $this->pageContainerClass .= ($this->sidebarMinified) ? 'page-sidebar-minified ' : '';
        $this->pageContainerClass .= ($this->sidebarTwo) ? 'page-with-two-sidebar ' : '';
        $this->pageContainerClass .= ($this->contentFullHeight) ? 'page-content-full-height ' : '';
        
        $this->contentClass = ($this->contentFullWidth) || ($this->contentFullHeight) ? 'content-full-width ' : '';
        $this->contentClass .= ($this->contentInverseMode) ? 'content-inverse-mode ' : '';
        
		$this->headerClass = ($this->headerInverse) ? 'navbar-inverse ' : 'navbar-default ';
	    $this->headerMenu = ($this->headerMenu) ? $this->headerMenu : '';
	    $this->hiddenSearch = ($this->headerLanguageBar) ? 'hidden-xs' : '';
        $this->headerMegaMenu = ($this->headerMegaMenu) ? $this->headerMegaMenu : ''; 
        $this->sidebarClass = ($this->sidebarTransparent)? 'sidebar-transparent' : '';
        return $this;
	}
	public function breadcrumb(array $var = null)
	{
		return View::make('back.includes.breadcrumb',compact('var'));
    }
    public function categories()
    {
        return TypeArtikel::with('artikel')->get();
    }
    
}

