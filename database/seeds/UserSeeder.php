<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([ 'name' => 'Administrador', 'email' => 'admin@gmail.com', 'administrator' => '1', 'password' => Hash::make('12345678') ]);
        DB::table('users')->insert([ 'name' => 'Thalita Bispo', 'email' => 'thalita@gmail.com', 'administrator' => '0','password' => Hash::make('12345678') ]);
    }
}
