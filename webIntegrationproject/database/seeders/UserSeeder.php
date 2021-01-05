<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\User;


class UserSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'username'=> 'Admin',
            'email' => Str::random(10).'@gmail.com',
            'birthday'=>'2020-12-12',
            'bio'=> 'Admin user',
            'link'=> 'https://www.erasmushogeschool.be/nl',
            'password' => '123456',
            'is_admin' => 1
        ]);
    }
}
