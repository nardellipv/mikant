<?php

use Illuminate\Database\Seeder;
use App\ModelFront\NewsLetter;

class NewsLetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(NewsLetter::class, 75)->create();
    }
}
