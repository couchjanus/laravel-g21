<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Role, Permission};

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_perm = Permission::all();
        Role::findOrFail(1)->permissions()->sync($admin_perm->pluck('id'));

        $user_perm = $admin_perm->filter(function ($permission) {
            return substr($permission->title, 0, 6) !='brand_';
        });

        Role::findOrFail(2)->permissions()->sync($user_perm);
    }
}