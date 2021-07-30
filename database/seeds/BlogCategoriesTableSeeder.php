<?php

use App\BlogCategory;
use Illuminate\Database\Seeder;

class BlogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogCategory::insert([
            ['name' => 'JavaScript', 'create_user_id' => 1, 'created_at' => now()],
            ['name' => 'Laravel', 'create_user_id' => 1, 'created_at' => now()],
            ['name' => 'Vue.js', 'create_user_id' => 1, 'created_at' => now()],
        ]);
    }
}
