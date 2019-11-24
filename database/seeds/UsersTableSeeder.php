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
            'name' => 'Michelangelo',
            'email' => 'mvianei@gmail.com',
            'password' => bcrypt('1234')
        ]);

        User::create([
            'name' => 'Vanda',
            'email' => 'vanda@gmail.com',
            'password' => bcrypt('1234')
        ]);
    }
}
