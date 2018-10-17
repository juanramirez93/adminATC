<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNaturalCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('natural_customers', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('cedula')->unique();
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('cellphone1')->nullable();
            $table->string('cellphone2')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('department')->nullable();
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
        Schema::dropIfExists('natural_customers');
    }
}
