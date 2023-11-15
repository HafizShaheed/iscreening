<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class ClientUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'user_name' => 'johndoe',
                'email' => 'clientcrm@erp.com',
                'email_verified_at' => now(),
                'industry' => 'Technology',
                'poc' => 'Jane Smith',
                'location' => 'New York',
                'password' => Hash::make('secret123'), // Hash the password
                'status' => 1,
                'remember_token' =>Str::random(12),
                // Generate a random remember token
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Add more user data here if needed
        ]);
    }
}
