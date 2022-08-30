<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Teachers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('secondname');
            $table->string('age');
            $table->string('gender');
            $table->string('Subject');
            $table->string('phonenumber')->unique();
            $table->string('Address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
