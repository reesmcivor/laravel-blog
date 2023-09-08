<?php

namespace ReesMcIvor\Labels\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ReesMcIvor\Labels\Database\Factories\LabelFactory;

class Label extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    protected static function newFactory()
    {
        return new LabelFactory();
    }

    public function parent()
    {
        return $this->belongsTo(Label::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Label::class, 'parent_id');
    }
}
