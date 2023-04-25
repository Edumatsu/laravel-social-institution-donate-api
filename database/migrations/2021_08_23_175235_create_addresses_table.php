<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('name', 50)->nullable();
            $table->string('cep', 9);
            $table->string('street', 255);
            $table->string('number', 20);
            $table->string('neighborhood', 100);
            $table->string('complement', 100)->nullable();
            $table->string('city', 100);
            $table->string('state', 2);
            $table->decimal('latitude', 9, 6);
            $table->decimal('longitude', 9, 6);
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
        Schema::dropIfExists('addresses');
    }
}
