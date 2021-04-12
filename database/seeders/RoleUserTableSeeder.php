<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Enums\UserGroup;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::where('group', UserGroup::Administrator)->first()->roles()->sync(1);

        $users = User::where('group', UserGroup::Manager)->get();
        foreach ($users as $user) {
            # code...
            $user->roles()->sync(2);
        }

    }
}
