<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::factory()->count(10)->create();

        User::create([
            'name' => 'Admin BantuKios',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('adminadmin'), // password
            'country' => 'Indonesia',
            'gender' => 'Male',
            'dob' => '2011-02-05',
            'isadmin' => 1,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name'=> 'User BantuKios',
            'email' => ' ss@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('useruser'), // password
            'country'=> 'Japan',
            'gender'=> 'female',
            'dob'=> '2011-02-05',
            'isadmin'=> 0,
            'remember_token' => Str::random(10),
        ]);
    }
}
