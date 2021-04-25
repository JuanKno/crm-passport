<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name' => 'Juan Esteban',
            'email' => 'juan@mail.com',
            'password' => bcrypt('secret'),
            'role' => 'admin'
        ]);

        factory(User::class, 5)->create();
    }
}
