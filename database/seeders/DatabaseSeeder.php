<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseParticipant;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses_amount = rand(3, 10);
        $students_amount = rand(15, 30);
        $participants_max = $students_amount * 2;
        $participants_amount = 0;

        Course::factory($courses_amount)->create();
        Student::factory($students_amount)->create();

        $matches = [];

        while ($participants_amount < $participants_max) {

            $course_id = rand(1, $courses_amount);
            $student_id = rand(1, $students_amount);

            if (empty($matches[$course_id][$student_id])) {
                $matches[$course_id][$student_id] = true;

                CourseParticipant::factory()->create([
                    'course_id' => $course_id,
                    'student_id' => $student_id
                ]);

                $participants_amount++;
            }
        }
    }
}
