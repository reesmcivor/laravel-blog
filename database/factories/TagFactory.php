<?php

namespace ReesMcIvor\Tags\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use ReesMcIvor\Tags\Models\Tag;

class TagFactory extends Factory
{

    protected $model = Tag::class;

    public function definition() : array
    {
        return [
            'id' => 1,
            'name' => $this->faker->name,
        ];
    }
}
