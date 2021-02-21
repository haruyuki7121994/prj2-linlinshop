<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    private $category;
    private $action;

    /**
     * Breadcrumb constructor.
     * @param $category
     * @param $action
     */
    public function __construct($category, $action)
    {
        $this->category = $category;
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.breadcrumb', [
            'category' => $this->category,
            'action' => $this->action,
        ]);
    }
}
