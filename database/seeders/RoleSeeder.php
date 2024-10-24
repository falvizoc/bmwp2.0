<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $roleAdmin = Role::create(['name' => 'Admin']);

        # Dashboard
        Permission::create(['name' => 'admin.index',
                            'description' => 'Ver Dashboard'])->syncRoles([$roleAdmin]);

        # Usuarios
        Permission::create(['name' => 'admin.users.index',
                            'description' => 'Ver listado de Usuarios'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.users.edit',
                            'description' => 'Editar Usuario'])->syncRoles([$roleAdmin]);

        # Categories
        Permission::create(['name' => 'admin.categorias.index',
                            'description' => 'Ver listado de Categorias'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.categorias.create',
                            'description' => 'Crear Categorias'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.categorias.edit',
                            'description' => 'Editar Categorias'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.categorias.show',
                            'description' => 'Visualizar Categorias'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.categorias.destroy',
                            'description' => 'Eliminar Categorias'])->syncRoles([$roleAdmin]);
                            
        # Consultas Webs
        Permission::create(['name' => 'admin.consultas.index',
                            'description' => 'Ver listado de Consultas'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.consultas.show',
                            'description' => 'Visualizar Consultas'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.consultas.destroy',
                            'description' => 'Eliminar Consultas'])->syncRoles([$roleAdmin]);
        
        # Clientes
        Permission::create(['name' => 'admin.clientes.index',
                            'description' => 'Ver listado de Clientes'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.clientes.create',
                            'description' => 'Crear Clientes'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.clientes.edit',
                            'description' => 'Editar Clientes'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.clientes.show',
                            'description' => 'Visualizar Clientes'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.clientes.destroy',
                            'description' => 'Eliminar Clientes'])->syncRoles([$roleAdmin]);

        # Paises
        Permission::create(['name' => 'admin.paises.index',
        'description' => 'Ver listado de Paises'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.paises.create',
                'description' => 'Crear Paises'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.paises.edit',
                'description' => 'Editar Paises'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.paises.show',
                'description' => 'Visualizar Paises'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.paises.destroy',
                'description' => 'Eliminar Paises'])->syncRoles([$roleAdmin]);

        # Sliders
        Permission::create(['name' => 'admin.sliders.index',
        'description' => 'Ver listado de Sliders'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.sliders.create',
                'description' => 'Crear Sliders'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.sliders.edit',
                'description' => 'Editar Sliders'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.sliders.show',
                'description' => 'Visualizar Sliders'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.sliders.destroy',
                'description' => 'Eliminar Sliders'])->syncRoles([$roleAdmin]);

    }
}
