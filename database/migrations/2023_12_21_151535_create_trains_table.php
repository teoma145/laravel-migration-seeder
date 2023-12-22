<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('start_station',100);
            $table->string('arrival_station',100);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code',20)->unique();
            $table->string('carriage_number');
            $table->tinyInteger('in_time')->default(1);
            $table->tinyInteger('cancelled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
