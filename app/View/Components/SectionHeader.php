<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SectionHeader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $heading, $breadcrumb;

    public function __construct($heading, $breadcrumb)
    {
        $this->heading = $heading;
        $this->breadcrumb = $breadcrumb;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.section-header');
    }
}
