<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('name', 50);
            $table->string('description', 140)->nullable();
            $table->text('about')->nullable();
            $table->string('document', 20)->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('cellphone')->nullable();
            $table->string('logo_url')->nullable();
            $table->string('slug', 50);
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('payment_token')->nullable();
            $table->text('special_donate_text')->nullable();
            $table->string('special_donate_url')->nullable();
            $table->text('voluntary_text')->nullable();
            $table->string('voluntary_url')->nullable();
            $table->boolean('money_donate')->default(false);
            $table->boolean('approved')->default(false);
            $table->boolean('active')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutions');
    }
}
