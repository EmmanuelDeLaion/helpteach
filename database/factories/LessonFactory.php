<?php

namespace Database\Factories;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lesson::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'url' => 'https://www.youtube.com/watch?v=2b0d0krxx_Y&list=PLwgB9dxFfJRy66TthmNT9SZJ9wEiUntEB&index=23',
            'frame' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/G3BsMNUO0ks" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'platform_id' => 1

        ];
    }
}
