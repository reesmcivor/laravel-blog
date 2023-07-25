<?php

namespace ReesMcIvor\Groups\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ReesMcIvor\Groups\Database\Factories\GroupFactory;

class Group extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return new GroupFactory();
    }
}
