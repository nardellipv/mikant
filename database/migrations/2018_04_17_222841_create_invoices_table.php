<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');

            $table->date('date_start');
            $table->date('date_end');
            $table->float('price');
            $table->float('balance');
            $table->integer('quantity');
            $table->integer('tax');
            $table->string('description');
            $table->enum('status',['CANCEL','PAY','SENT', 'DRAFT'])->default('DRAFT');
            $table->integer('client_id')->unsigned();
            $table->integer('project_id')->unsigned();
            $table->integer('payment_id')->unsigned();


            //relaciones

            $table->foreign('client_id')->references('id')->on('clients')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('project_id')->references('id')->on('projects')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('payment_id')->references('id')->on('payments')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
