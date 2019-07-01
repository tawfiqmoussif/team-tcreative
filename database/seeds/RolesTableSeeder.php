<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([
            'name' => "super_admin"]);
        DB::table('roles')->insert([
            'name' => "admin",
        ]);
        DB::table('roles')->insert([
            'name' => "secrétaire",
        ]);
    }
}
