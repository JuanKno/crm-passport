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
            'name' => 'Usuario administrador',
            'email' => 'admin@mail.com',
            'password' => bcrypt('secret'),
            'role' => 'admin',
            'email_verified_at' => now()
        ]);

        
        User::create([
            'name' => 'Usuario Vendedor',
            'email' => 'seller@mail.com',
            'password' => bcrypt('secret'),
            'role' => 'seller',
            'email_verified_at' => now()
        ]);

        factory(User::class, 5)->create();
    }
}
