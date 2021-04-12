<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    function run()
    {
        $permissions = [
            [
                'id' => 1,
                'title' => 'brand_access'
            ],
            [
                'id' => 2,
                'title' => 'product_access'
            ],
        ];
        Permission::insert($permissions);
    }
}
