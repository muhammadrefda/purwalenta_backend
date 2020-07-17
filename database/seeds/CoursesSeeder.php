<?php

use App\Category;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 10;
        factory(\App\Course::class, $count)->create()->each(
            function ($course){
                $categories = Category::all()->random(mt_rand(1, 5))->pluck('id');
                $course->categories()->attach($categories);
            }
        );
    }
}
