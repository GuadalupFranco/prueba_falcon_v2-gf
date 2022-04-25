<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run(){

        // Roles por defecto
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleEstudiante = Role::create(['name' => 'Estudiante']);

        // Permisos por defecto
        Permission::create(['name' => 'administrador-roles.index', 'description' => 'Roles - Vista inicial'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'administrador-roles.create', 'description' => 'Roles - Crear rol'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'administrador-roles.edit', 'description' => 'Roles - Modificar rol'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'administrador-roles.destroy', 'description' => 'Roles - Eliminar rol'])->syncRoles([$roleAdmin]);
    }
}
