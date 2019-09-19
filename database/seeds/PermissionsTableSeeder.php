<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'         => '1',
                'title'      => 'user_management_access',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '17',
                'title'      => 'registro_create',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '18',
                'title'      => 'registro_edit',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '19',
                'title'      => 'registro_show',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '20',
                'title'      => 'registro_delete',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '21',
                'title'      => 'registro_access',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '22',
                'title'      => 'contacto_create',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '23',
                'title'      => 'contacto_edit',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '24',
                'title'      => 'contacto_show',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '25',
                'title'      => 'contacto_delete',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '26',
                'title'      => 'contacto_access',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '27',
                'title'      => 'task_management_access',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '28',
                'title'      => 'task_status_create',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '29',
                'title'      => 'task_status_edit',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '30',
                'title'      => 'task_status_show',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '31',
                'title'      => 'task_status_delete',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '32',
                'title'      => 'task_status_access',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '33',
                'title'      => 'task_tag_create',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '34',
                'title'      => 'task_tag_edit',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '35',
                'title'      => 'task_tag_show',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '36',
                'title'      => 'task_tag_delete',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '37',
                'title'      => 'task_tag_access',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '38',
                'title'      => 'task_create',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '39',
                'title'      => 'task_edit',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '40',
                'title'      => 'task_show',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '41',
                'title'      => 'task_delete',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '42',
                'title'      => 'task_access',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
            [
                'id'         => '43',
                'title'      => 'tasks_calendar_access',
                'created_at' => '2019-09-19 19:13:14',
                'updated_at' => '2019-09-19 19:13:14',
            ],
        ];

        Permission::insert($permissions);
    }
}
