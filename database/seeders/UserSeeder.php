<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::factory()->count(10)->create();

        $data = [
            [
                'name' => "ADMIN",
                'email' => "admin@gmail.com",
                'email_verified_at' => now(),
                'password' => Hash::make('admin'), // password
                'no_hp' => "085209336422",
                'role' => "admin",
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now()->addHour()
            ],

        ];

        User::insert($data);
    }
}
