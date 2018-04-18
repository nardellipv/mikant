<?php

use Illuminate\Database\Seeder;
use App\ModelBack\Payment;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Payment::class, 3)->create();
    }
}
