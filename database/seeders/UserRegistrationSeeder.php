<?php

namespace Database\Seeders;

use App\Models\PolicyRegistration;
use App\Models\UserRegistration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        UserRegistration::factory(1000)->create();

    }
}
