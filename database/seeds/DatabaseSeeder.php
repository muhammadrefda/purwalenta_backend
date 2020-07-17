<?php

use App\Category;
use App\Course;
use App\Transaction;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();
        Category::truncate();
        Course::truncate();
        Transaction::truncate();
        DB::table('category_course')->truncate();

         $this->call(UsersSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(CoursesSeeder::class);
//        $this->call(TransactionsSeeder::class);

    }
}
