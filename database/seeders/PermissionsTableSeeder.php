<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use App\Http\Controllers\UserController;
// use Illuminate\Support\Facades\Schema;

// use Illuminate\Database\Seeders\DB;
// use DB;
class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        // Permission::truncate();
        $permissions = [
            [
                'id'    => 1,
                'title' => 'facture_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'facture_create',
            ],
            [
                'id'    => 13,
                'title' => 'facture_edit',
            ],
            [
                'id'    => 14,
                'title' => 'facture_show',
            ],
            [
                'id'    => 15,
                'title' => 'facture_delete',
            ],
            [
                'id'    => 16,
                'title' => 'facture_access',
            ],
            [
                'id'    => 79,
                'title' => 'facture_alert_create',
            ],
            [
                'id'    => 80,
                'title' => 'facture_alert_show',
            ],
            [
                'id'    => 81,
                'title' => 'facture_alert_delete',
            ],
            [
                'id'    => 82,
                'title' => 'facture_alert_access',
            ],
            [
                'id'    => 83,
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => 84,
                'title' => 'user_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
