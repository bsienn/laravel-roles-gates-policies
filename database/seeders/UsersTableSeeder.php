<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => Hash::make('123456789')
        ]);

        $author = User::create([
            'name' => 'author',
            'email' => 'author@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => Hash::make('123456789')
        ]);

        $user = User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => Hash::make('123456789')
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);
    }
}
