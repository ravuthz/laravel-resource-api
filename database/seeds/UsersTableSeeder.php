<?php

use App\User;
use Illuminate\Database\Seeder;

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
            'name' => 'adminz',
            'email' => 'adminz@gmail.com',
            'password' => bcrypt('123123')
        ]);
        User::create([
            'name' => 'ravuthz',
            'email' => 'ravuthz@gmail.com',
            'password' => bcrypt('123123')
        ]);
    }
}
