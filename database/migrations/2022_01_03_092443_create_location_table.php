<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location', function (Blueprint $table) {
            $table->id();
            $table->string('NO_PROP');
            $table->string('NAMA_PROP');
            $table->string('NO_KAB');
            $table->string('NAMA_KAB');
            $table->string('NO_KEC');
            $table->string('NAMA_KEC');
            $table->string('NO_KEL');
            $table->string('NAMA_KEL');
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
        Schema::dropIfExists('location');
    }
}
