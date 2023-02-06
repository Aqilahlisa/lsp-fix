<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //untuk dummy data admin
        $users= [
            [
                'name'=>'admin',
                'email'=>'admin@seeder.com',
                'password'=>Hash::make('passwordadmin'),
                'level'=>'admin',
                'email_verified_at'=>now()
            ],
            [
             'name'=>'user',
                'email'=>'user@seeder.com',
                'password'=>Hash::make('passworduser'),
                'level'=>'customer',
                'email_verified_at'=>now()
            ]

            ];

            //eksekusi
            foreach ($users as $user){
                User::create($user);
            }
    }
}
