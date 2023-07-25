<?php

namespace ReesMcIvor\Labels\Traits;

use Illuminate\Database\Eloquent\Relations\MorphByMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use ReesMcIvor\Labels\Models\Label;
use ReesMcIvor\SlotKeeper\Models\SlotKeeper;

trait HasLabels
{
    public function labels() : MorphToMany
    {
        return $this->morphToMany(Label::class, 'labelable');
    }
}