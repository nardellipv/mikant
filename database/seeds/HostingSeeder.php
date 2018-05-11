<?php

use Illuminate\Database\Seeder;
use App\ModelBack\Hosting;

class HostingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Hosting::class, 3)->create();
    }
}
