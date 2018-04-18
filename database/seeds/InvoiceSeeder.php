<?php

use Illuminate\Database\Seeder;
use App\ModelBack\Invoice;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Invoice::class, 25)->create();
    }
}
