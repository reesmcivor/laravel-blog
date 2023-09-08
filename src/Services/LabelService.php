<?php

namespace ReesMcIvor\Labels\Services;

use Illuminate\Support\Collection;
use ReesMcIvor\Labels\Models\Label;

class LabelService {

    public function generateSelectOptions($labels, $parentId = null, $prefix = '')
    {
        $options = '';
        foreach ($labels as $label) {
            if ($label->parent_id == $parentId) {
                $options .= '<option value="' . $label->id . '">' . $prefix . $label->name . '</option>';
                $options .= $this->generateSelectOptions($labels, $label->id, $prefix . '-');
            }
        }
        return $options;
    }

    public function getAllLabels() : Collection
    {
        return Label::all();
    }
}