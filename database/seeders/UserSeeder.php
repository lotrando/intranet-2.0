<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'personal_number'   => '61625',
            'name'              => 'Klika Miroslav',
            'email'             => 'miroslav.klika@khn.cz',
            'password'          => bcrypt('heslo')
        ]);

        User::factory(50)->create();
    }
}
