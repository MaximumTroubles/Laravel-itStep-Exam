<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        DB::table('bans')->insert([
            [
                'id' => 1,
                'name' => 'Не забанен'
            ],
            [
                'id' => 2,
                'name' => 'ЗАБАНЕН'
            ],
        ]);
            DB::table('users')->insert([
            [
                'avatar' => 'img/user2-160x160.jpg',
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('1234'),
                'phone' => '77777777',

            ],
            [
                'avarat' => 'img/user3-128x128.jpg',
                'name' => 'User',
                'email' => 'user@user.com',
                'password' => Hash::make('1234'),
                'phone' => '888888888',

            ]
        ]);
        DB::table('roles')->insert([
            [
                'name' => 'Админ',
                'slug' => 'admin'
            ]
        ]);
        DB::table('role_user')->insert([
            [
                'role_id' => 1,
                'user_id' => 1
            ]
        ]);
}
}
