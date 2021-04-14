<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'gender' => 1,            
            'email' => 'admin@test.jp',
            'phone_number' => '054-222-222',            
            'password' => Hash::make('admin1234'),
            'is_admin' => true
        ]);
    }
}
