<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
                    'name' => 'Osama Omar',
                    'email' => 'admin@gmail.com',
                    'UserPhone' => '+92 300 2174958',
                    'UserCnic' => '42000-1234567-9',
                    'password' => bcrypt('123456789'),
                ]);
    }
}
