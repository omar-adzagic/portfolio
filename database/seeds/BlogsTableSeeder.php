<?php

use App\Blog;
use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::insert([
            ['title' => 'JavaScript higher oreder functions', 'description' => 'lorem ipsum dolor sit amet', 'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error ea officia aspernatur asperiores qui soluta deserunt assumenda eligendi optio architecto mollitia, recusandae ducimus nihil velit doloremque enim veritatis maxime provident.', 'blog_category_id' => 1, 'create_user_id' => 1, 'created_at' => now()],
            ['title' => 'Laravel routes', 'description' => 'lorem ipsum dolor sit amet', 'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error ea officia aspernatur asperiores qui soluta deserunt assumenda eligendi optio architecto mollitia, recusandae ducimus nihil velit doloremque enim veritatis maxime provident.', 'blog_category_id' => 2, 'create_user_id' => 1, 'created_at' => now()],
            ['title' => 'Vue.js router', 'description' => 'lorem ipsum dolor sit amet', 'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error ea officia aspernatur asperiores qui soluta deserunt assumenda eligendi optio architecto mollitia, recusandae ducimus nihil velit doloremque enim veritatis maxime provident.', 'blog_category_id' => 3, 'create_user_id' => 1, 'created_at' => now()],
            ['title' => 'JS prototype functions', 'description' => 'lorem ipsum dolor sit amet', 'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error ea officia aspernatur asperiores qui soluta deserunt assumenda eligendi optio architecto mollitia, recusandae ducimus nihil velit doloremque enim veritatis maxime provident.', 'blog_category_id' => 1, 'create_user_id' => 1, 'created_at' => now()],
            ['title' => 'Query builder in Laravel', 'description' => 'lorem ipsum dolor sit amet', 'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error ea officia aspernatur asperiores qui soluta deserunt assumenda eligendi optio architecto mollitia, recusandae ducimus nihil velit doloremque enim veritatis maxime provident.', 'blog_category_id' => 2, 'create_user_id' => 1, 'created_at' => now()],
            ['title' => 'Vue.js eksperti kazu sledece', 'description' => 'lorem ipsum dolor sit amet', 'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error ea officia aspernatur asperiores qui soluta deserunt assumenda eligendi optio architecto mollitia, recusandae ducimus nihil velit doloremque enim veritatis maxime provident.', 'blog_category_id' => 3, 'create_user_id' => 1, 'created_at' => now()],
        ]);
    }
}
