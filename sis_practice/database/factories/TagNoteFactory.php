<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TagNoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $noteId = $this->faker->numberBetween(1, 50);
        $tagId = $this->faker->numberBetween(1, 50);

        return [
            'tag_id' => $tagId,
            'note_id' => $noteId
        ];
    }
}
