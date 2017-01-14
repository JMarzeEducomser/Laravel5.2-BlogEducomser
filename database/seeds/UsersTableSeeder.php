<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Usuario Administrador
        DB::table('users')->insert([
            'name' => 'J. Marcelo Arze',
            'email' => 'arze.jesus@gmail.com',
            'password' => bcrypt('123456'),
            'admin' => true,
        ]);

        // Usuario de Sistema
        DB::table('users')->insert([
            'name' => 'Cliente',
            'email' => 'cliente@gmail.com',
            'password' => bcrypt('123456'),
            'admin' => false,
        ]);
    }
}
