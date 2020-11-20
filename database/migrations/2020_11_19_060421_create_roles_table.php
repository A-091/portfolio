<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 8)->comment('ロール名');
            $table->string('memo')->comment('備考');
            $table->timestamps();
        });
        DB::table('roles')->insert(['id'=>1,'name'=>'sv','memo'=>'管理者']);
        DB::table('roles')->insert(['id'=>2,'name'=>'clerk','memo'=>'スタッフ']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}