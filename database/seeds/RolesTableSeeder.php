<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(['id' => 1, 'name' => 'sv', 'memo' => '管理者']);
        DB::table('roles')->insert(['id' => 2, 'name' => 'clerk', 'memo' => 'スタッフ']);
    }
}
