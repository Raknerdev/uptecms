<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'=>'root',
            'name'=>'root',
            'last_name'=>'root',
            'email'=>'root@uptecms.com',
            'password'=>bcrypt('root')
        ])->assignRole('root');

        User::create([
            'username'=>'admin',
            'name'=> 'admin',
            'last_name'=>'admin',
            'email'=> 'admin@uptecms.com',
            'password'=> bcrypt('admin')
        ])->assignRole('admin');

        User::create([
            'username'=>'user',
            'name'=> 'user',
            'last_name'=>'user',
            'email'=> 'user@uptecms.com',
            'password'=> bcrypt('user')
        ])->assignRole('user');        
    }
}
