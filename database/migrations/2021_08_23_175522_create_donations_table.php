<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('institution_id')->unsigned();
            $table->decimal('institution_amount', 9, 2);
            $table->decimal('payment_institution_fee', 4, 2);
            $table->decimal('institution_final_amount', 9, 2);
            $table->decimal('app_amount', 9, 2);
            $table->decimal('payment_app_fee', 4, 2);
            $table->decimal('app_final_amount', 9, 2);
            $table->string('transaction_id')->nullable();
            $table->string('preference_id');
            $table->enum('status', ['created', 'pending', 'completed', 'cancelled']);
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donations');
    }
}
