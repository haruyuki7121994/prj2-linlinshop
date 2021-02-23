<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    private $category;
    private $action;
    /**
     * @var null
     */
    private $view;

    /**
     * Breadcrumb constructor.
     * @param $category
     * @param $action
     * @param null $view
     */
    public function __construct($category, $action, $view = null)
    {
        $this->category = $category;
        $this->action = $action;
        $this->view = $view;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $compact = [
            'category' => $this->category,
            'action' => $this->action,
            'view' => $this->view,
        ];

        return view('components.breadcrumb', $compact);
    }
}
