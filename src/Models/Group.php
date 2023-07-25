<?php

namespace ReesMcIvor\Tags\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ReesMcIvor\Tags\Database\Factories\TagFactory;

class Tag extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return new TagFactory();
    }
}
