<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_forms', function (Blueprint $table) {
            $table->id();
            $table->string('UserName');
            $table->string('UserEmail')->unique();
            $table->bigInteger('UserPhone')->unsigned();
            $table->bigInteger('UserCNIC')->unsigned();
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
        Schema::dropIfExists('app_forms');
    }
}
