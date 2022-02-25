<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::factory()->times(10)->create();

        $user = User::find(1);
        $user->name = 'nbutluo';
        $user->email = 'nbutluo@163.com';
        $user->save();
    }
}
