<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
       User::insert([
           'name' => 'Manivanh',
           'role' => 'admin',
           'phone' => '56574225',
           'password' => '12345678',
           "created_at"=>Carbon::now()

       ]);

    }
}
