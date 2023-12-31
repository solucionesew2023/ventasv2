<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesSeeder::class);
        $this->call(DepartmentsSeeder::class);
        $this->call(CitiesSeeder::class);
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            ]);
           $role = Role::create(['name' => 'Administrador']);
           $user->assignRole($role);

    }
}
