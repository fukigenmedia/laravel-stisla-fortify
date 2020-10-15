<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SectionSubHeader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title, $lead;

    public function __construct($title, $lead)
    {
        $this->title = $title;
        $this->lead = $lead;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.section-sub-header');
    }
}
