<?php

use Illuminate\Database\Seeder;
use App\ModelFront\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Blog::class, 75)->create();
    }
}
