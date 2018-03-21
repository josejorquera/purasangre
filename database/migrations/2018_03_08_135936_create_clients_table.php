<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rut', 20);
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->integer('phone')->nullable();
            $table->string('email', 255);
            $table->string('address', 255)->nullable();
            $table->date('birthdate');
            $table->date('registered_at');
            $table->integer('plan_id');
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
        Schema::dropIfExists('clients');
    }
}
