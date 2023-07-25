<?php

namespace ReesMcIvor\Labels\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use ReesMcIvor\Labels\Models\Label;

class LabelTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_label()
    {
        $label = Label::factory()->create();

        $this->assertDatabaseHas('labels', [
            'id' => $label->id,
        ]);
    }
}