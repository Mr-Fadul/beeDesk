<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQueueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('queue', function (Blueprint $table) {
            $table->id();            
            $table->unsignedBigInteger('ticket');                        
            $table->unsignedBigInteger('priority');  
            $table->unsignedBigInteger('status');
            $table->unsignedBigInteger('technician');
            $table->string('observation');
            $table->timestamps();

            $table->foreign('priority')->references('id')->on('priority');
            $table->foreign('status')->references('id')->on('status');
            $table->foreign('ticket')->references('id')->on('tickets');
            $table->foreign('technician')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('queue');
    }
}
