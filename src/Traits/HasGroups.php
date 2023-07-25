<?php

namespace ReesMcIvor\Groups\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use ReesMcIvor\Groups\Models\Group;

class HasGroups
{
    public function groups() : MorphMany
    {
        return $this->morphMany(Group::class, 'groups');
    }
}