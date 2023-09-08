<?php

namespace ReesMcIvor\Labels\View\Components;

use Illuminate\View\Component;
use ReesMcIvor\Labels\Models\Label;

class LabelTreeDropdown extends Component
{
    public $labels;
    public $selectOptions;

    public function __construct()
    {
        $this->labels = Label::all();
        $this->selectOptions = $this->generateSelectOptions($this->labels);
    }

    public function generateSelectOptions($labels, $parentId = null, $prefix = '') {
        $options = '';

        foreach ($labels as $label) {
            if ($label->parent_id == $parentId) {
                $options .= '<option value="' . $label->id . '">' . $prefix . $label->name . '</option>';
                $options .= $this->generateSelectOptions($labels, $label->id, $prefix . '-');
            }
        }

        return $options;
    }

    public function render()
    {
        return view('laravel-labelables::components.label-tree-dropdown');
    }
}