<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'Administrator',
                'permissions' => [
                    'users' => 'crud',
                    'roles' => 'crud',
                    'categories' => 'crud',
                    'posts' => 'crud',
                    'tags' => 'crud'
                ]
            ], [
                'name' => 'Contributor',
                'permissions' => [
                    'users' => '',
                    'roles' => '',
                    'categories' => 'cru',
                    'posts' => 'crud',
                    'tags' => 'crud'
                ]
            ], [
                'name' => 'Author',
                'permissions' => [
                    'users' => '',
                    'roles' => '',
                    'categories' => 'r',
                    'posts' => 'crudx',
                    'tags' => 'cr'
                ]
            ]
        ];

        Role::insert($roles);
    }
}
