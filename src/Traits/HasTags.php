<?php

namespace ReesMcIvor\Tags\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use ReesMcIvor\Tags\Models\Tag;

class HasTags
{
    public function tags() : MorphMany
    {
        return $this->morphMany(Tag::class, 'tags');
    }
}