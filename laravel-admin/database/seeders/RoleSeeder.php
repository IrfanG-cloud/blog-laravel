<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        App\Models\Role::create(['name' => 'Admin']);
        App\Models\Role::create(['name' => 'Editor']);
        App\Models\Role::create(['name' => 'Viewer']);
    }
}
