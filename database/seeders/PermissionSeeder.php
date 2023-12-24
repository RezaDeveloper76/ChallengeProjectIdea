<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'task-create']);
        Permission::create(['name' => 'task-read']);
        Permission::create(['name' => 'task-update']);
        Permission::create(['name' => 'task-delete']);
    }
}
