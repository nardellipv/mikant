<?php

use Illuminate\Database\Seeder;
use App\ModelBack\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Client::class, 20)->create();
    }
}
