<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->id();
            $table->string('NIK');
            $table->string('NO_KK');
            $table->string('NAMA_LGKP');
            $table->string('JENIS_KLMIN');
            $table->string('TMPT_LHR');
            $table->string('TGL_LHR');
            $table->string('STAT_HBKEL');
            $table->string('STATUS_KAWIN');
            $table->string('PDDK_AKH');
            $table->string('JENIS_PKRJN');
            $table->string('NAMA_LGKP_IBU');
            $table->string('ALAMAT');
            $table->string('NO_PROP');
            $table->string('NO_KAB');
            $table->string('NO_KEC');
            $table->string('NO_KEL');
            $table->string('PROP_NAME');
            $table->string('KAB_NAME');
            $table->string('KEC_NAME');
            $table->string('KEL_NAME');
            $table->string('NO_RW');
            $table->string('NO_RT');
            $table->string('TRESHOLD');
            $table->string('USER_ID');
            $table->string('PASSWORD');
            $table->string('IP_USER');
            $table->string('result_NIK');
            $table->string('result_JENIS_PKRJN');
            $table->string('result_NAMA_LGKP_IBU');
            $table->string('result_NAMA_LGKP');
            $table->string('result_Alamat');
            $table->string('result_JENIS_KLMIN');
            $table->string('result_PROP_NAME');
            $table->string('result_TMPT_LHR');
            $table->string('result_KAB_NAME');
            $table->string('result_TGL_LHR');
            $table->string('result_KEC_NAME');
            $table->string('result_NO_PROP');
            $table->string('result_NO_KEC');
            $table->string('result_NO_KEL');
            $table->string('result_KEL_NAME');
            $table->string('result_STATUS_KAWIN');
            $table->string('result_NO_RT');
            $table->string('result_NO_RW');
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
        Schema::dropIfExists('history');
    }
}
