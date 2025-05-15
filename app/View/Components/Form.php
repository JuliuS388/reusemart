<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form extends Component
{
    public $action;
    public $method;
    public $title;

    public $fields;

    public $button_text;

    public $form_type;
    public $is_edit;
    /**
     * Create a new component instance.
     */
    public function __construct($action, $method = 'POST', $title, $fields, $button_text = 'Submit', $is_edit = false)
    {
        //
        $this->action = $action;
        $this->method = $method;
        $this->title = $title;
        $this->fields = $fields;
        $this->button_text = $button_text;
        $this->is_edit = false;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form');
    }
}
