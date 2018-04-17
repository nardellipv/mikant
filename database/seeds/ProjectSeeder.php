<?php

use Illuminate\Database\Seeder;
use App\ModelBack\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Project::class, 25)->create();
    }
}
