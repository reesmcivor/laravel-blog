<?php

namespace ReesMcIvor\Groups\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use ReesMcIvor\Groups\Models\Group;

class GroupFactory extends Factory
{

    protected $model = Group::class;

    public function definition() : array
    {
        return [
            'id' => 1,
            'name' => $this->faker->name,
        ];
    }
}
