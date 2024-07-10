<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => "camille",
            'password' => "pass",
            'email' => "camille.abang@unc.edu.ph",
            'role' => "college_poc"
        ]);

        User::create([
            'name' => "cj",
            'password' => "pass",
            'email' => "christinejoy.cleofe@unc.edu.ph",
            'role' => "student"
        ]);

        User::create([
            'name' => "jude",
            'password' => "pass",
            'email' => "judechristian.adolfo@unc.edu.ph",
            'role' => "poc_head"
        ]);
    }
}
