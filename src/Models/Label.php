<?php

namespace ReesMcIvor\Labels\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ReesMcIvor\Labels\Database\Factories\LabelFactory;

class Label extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return new LabelFactory();
    }
}
