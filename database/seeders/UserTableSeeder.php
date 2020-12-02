<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
                        'name' => 'Pierce Prange',
                        'email' => 'streamline.our.designs@gmail.com',
                        'password' => Hash::make('password'),
                    ]);
    }
}