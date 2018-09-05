<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;
//1use App\Http\Controllers\Auth;


class CreateBansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bans', function (Blueprint $table) {
            $table->increments('id');//количество банов
            $table->string('P_Nickname');//Ник Нарушителя
            $table->Integer('P_ID');//ID нарушителя
            $table->double('rule');//пункт правил
            $table->string('created_by');//кем был выдан
            $table->timestamp('time_created')->define(Carbon\Carbon::now());//время выдачи, по умолчание текущее время
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
        Schema::drop('bans');
    }
}
