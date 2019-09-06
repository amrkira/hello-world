<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    DB::table('roles')->insert([
            'name' => string('Super Admin'),
            
        ]);
      DB::table('roles')->insert([
            'name' => string('Admin'),
            
        ]);
        DB::table('roles')->insert([
            'name' => string('Przedstawiciel Regionalny'),
            
        ]);
          DB::table('roles')->insert([
            'name' => string('Przedstawiciel Handlowy'),
            
        ]);
            DB::table('roles')->insert([
            'name' => string('Sprzedawca'),
            
        ]);
}
