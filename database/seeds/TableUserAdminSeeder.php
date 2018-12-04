<?php

use App\User;
use Illuminate\Database\Seeder;

class TableUserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = new User();

        $users->create([
            'name' => 'Admin',
            'email' => 'orestrov@gmail.com',
            'password' => bcrypt('123456'),
            'is_admin' => '1'
        ]);
    }
}
