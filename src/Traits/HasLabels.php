<?php

namespace ReesMcIvor\Labels\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use ReesMcIvor\Labels\Models\Label;

trait HasLabels
{
    public function labelables() : MorphMany
    {
        return $this->morphMany(Label::class, 'labelable');
    }
}