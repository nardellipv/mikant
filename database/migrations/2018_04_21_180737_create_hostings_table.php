<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostings', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('plan');
            $table->string('space_disk');
            $table->string('transferencia');
            $table->string('email_account');
            $table->string('data_base');
            $table->string('ftp');
            $table->string('year_pay');
            $table->integer('cost_before');
            $table->integer('cost_month');
            $table->integer('cost_domain');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hostings');
    }
}
