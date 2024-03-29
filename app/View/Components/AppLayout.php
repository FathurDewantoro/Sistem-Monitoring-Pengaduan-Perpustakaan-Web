<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */

    public $title;
    public function __construct($title = null)
    {
        $this->title = $title ?? "Glamour Salon";
    }

    public function render()
    {
        return view('layouts.main_page');
    }
}
