<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\CourseParticipant;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseParticipantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CourseParticipant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => fn() => Course::factory()->create(),
            'student_id' => fn() => Student::factory()->create(),
            'completed' => $this->faker->boolean()
        ];
    }
}
