<?php

namespace ReesMcIvor\Labels\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use ReesMcIvor\Labels\Models\Label;

class LabelFactory extends Factory
{

    protected $model = Label::class;

    public function definition() : array
    {
        return [
            'id' => 1,
            'name' => $this->faker->name,
        ];
    }
}
