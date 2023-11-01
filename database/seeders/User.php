<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsUser::create([
            'name'          => "Super Admin",
            'email'         => "superadmin@mail.com",
            'role_code'     => "superadmin",
            'password'      => bcrypt('12345678')
        ]);
    }
}
