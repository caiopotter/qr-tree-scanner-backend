<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::truncate();

        $password = Hash::make('visitor');

        User::create([
            'name' => 'Visitor',
            'email' => 'visitor@visitor.com',
            'password' => $password,
        ]);
    }
}