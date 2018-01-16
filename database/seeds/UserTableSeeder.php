<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use Carbon\Carbon;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->truncate();
 		DB::table('users')->insert([
            [
                'name' => 'Nallely',
                'lastname' => 'Flores',
                'email' => 'anjudark89@gmail.com',
                'password' => Hash::make('hello123'),
                'gender' => 1,
                'birthday' => Carbon::createFromFormat('Y-m-d','1989-10-07'),
                'mobile' => '55-55-55-55-55',
                'phone' => '55-55-55-55-55'
            ],
            [
                'name' => 'Miriam',
                'lastname' => 'García',
                'email' => 'gammc7@gmail.com',
                'password' => Hash::make('hello123'),
                'gender' => 1,
                'birthday' => Carbon::createFromFormat('Y-m-d','1989-10-07'),
                'mobile' => '55-55-55-55-55',
                'phone' => '55-55-55-55-55'
            ]
        ]);
    }

}