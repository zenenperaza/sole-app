<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Zenen Alexis';
        $user->email = 'zenenperaza@gmail.com';
        $user->password = bcrypt('3317397j');
        $user->email_verified_at = '2022-05-09';
        $user->remember_token = 'nNFhKn76Vic';
        $user->save();
            }
}
