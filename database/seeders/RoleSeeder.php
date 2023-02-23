<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Seller']);

        Permission::create(['name' => 'admin.home',
                            'description' => 'Ver el dashboard'])->syncRoles([$role1, $role2]);       


        Permission::create(['name' => 'admin.types.index',
                            'description' => 'Ver listado de tipos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.types.create',
                            'description' => 'Crear tipos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.types.edit',
                            'description' => 'Editar tipos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.types.destroy',
                            'description' => 'Eliminar tipos'])->syncRoles([$role1]);


        Permission::create(['name' => 'admin.flavors.index',
                            'description' => 'Ver listado de sabores'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.flavors.create',
                            'description' => 'Crear sabores'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.flavors.edit',
                            'description' => 'Editar sabores'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.flavors.destroy',
                            'description' => 'Eliminar sabores'])->syncRoles([$role1]);


        Permission::create(['name' => 'admin.products.index',
                            'description' => 'Ver listado de productos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.products.create',
                            'description' => 'Crear productos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.products.edit',
                            'description' => 'Editar productos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.products.destroy',
                            'description' => 'Eliminar productos'])->syncRoles([$role1]);


        Permission::create(['name' => 'admin.sales.index',
                            'description' => 'Ver listado de ventas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.sales.create',
                            'description' => 'Crear ventas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.sales.edit',
                            'description' => 'Editar ventas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.sales.destroy',
                            'description' => 'Eliminar ventas'])->syncRoles([$role1]);


        Permission::create(['name' => 'admin.stocks.index',
                            'description' => 'Ver listado de existencias'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.stocks.create',
                            'description' => 'Crear existencias'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.stocks.edit',
                            'description' => 'Editar existencias'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.stocks.destroy',
                            'description' => 'Eliminar existencias'])->syncRoles([$role1]);


        Permission::create(['name' => 'admin.users.index',
                            'description' => 'Ver listado de roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.create',
                            'description' => 'Crear roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit',
                            'description' => 'Editar roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.destroy',
                            'description' => 'Eliminar roles'])->syncRoles([$role1]);


        Permission::create(['name' => 'admin.roles.index',
                            'description' => 'Ver listado de roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.create',
                            'description' => 'Crear roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.edit',
                            'description' => 'Editar roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.destroy',
                            'description' => 'Eliminar roles'])->syncRoles([$role1]);


        Permission::create(['name' => 'admin.permissions.index',
                            'description' => 'Ver listado de permisos'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.permissions.create',
                            'description' => 'Crear permisos'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.permissions.edit',
                            'description' => 'Editar permisos'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.permissions.destroy',
                            'description' => 'Eliminar permisos'])->syncRoles([$role1]);

    }
}
