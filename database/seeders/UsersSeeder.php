<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate(); 
           $users = [ 
            [ 
              'name' => 'Admin',
              'email' => 'admin@gmail.com',
              'password' => '12345678',
              'is_admin' => '1',
            ],
            [
              'name' => 'rath',
              'email' => 'rath@gmail.com',
              'password' => '24668899',
              'is_admin' => null,
            ]
            
          ];

          foreach($users as $user)
          {
              User::create([
               'name' => $user['name'],
               'email' => $user['email'],
               'password' => Hash::make($user['password'])
             ]);
           }

    }
}
