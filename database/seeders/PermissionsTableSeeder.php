<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
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
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 18,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 19,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 20,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 21,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 22,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 23,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 24,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 25,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 26,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 27,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 28,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 29,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 30,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 31,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 32,
                'title' => 'expense_create',
            ],
            [
                'id'    => 33,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 34,
                'title' => 'expense_show',
            ],
            [
                'id'    => 35,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 36,
                'title' => 'expense_access',
            ],
            [
                'id'    => 37,
                'title' => 'income_create',
            ],
            [
                'id'    => 38,
                'title' => 'income_edit',
            ],
            [
                'id'    => 39,
                'title' => 'income_show',
            ],
            [
                'id'    => 40,
                'title' => 'income_delete',
            ],
            [
                'id'    => 41,
                'title' => 'income_access',
            ],
            [
                'id'    => 42,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 43,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 44,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 45,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 46,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 47,
                'title' => 'budget_category_create',
            ],
            [
                'id'    => 48,
                'title' => 'budget_category_edit',
            ],
            [
                'id'    => 49,
                'title' => 'budget_category_show',
            ],
            [
                'id'    => 50,
                'title' => 'budget_category_delete',
            ],
            [
                'id'    => 51,
                'title' => 'budget_category_access',
            ],
            [
                'id'    => 52,
                'title' => 'budget_create',
            ],
            [
                'id'    => 53,
                'title' => 'budget_edit',
            ],
            [
                'id'    => 54,
                'title' => 'budget_show',
            ],
            [
                'id'    => 55,
                'title' => 'budget_delete',
            ],
            [
                'id'    => 56,
                'title' => 'budget_access',
            ],
            [
                'id'    => 57,
                'title' => 'category_access',
            ],
            [
                'id'    => 58,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
