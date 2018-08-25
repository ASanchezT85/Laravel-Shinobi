<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
            'name'          => 'Navegar usuarios',
            'slug'          => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detaller de usuario',
            'slug'          => 'users.show',
            'description'   => 'Ver en detalles cada usuario del sistema',
        ]);
        Permission::create([
            'name'          => 'Edición de usuario',
            'slug'          => 'users.edit',
            'description'   => 'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar usuario',
            'slug'          => 'users.destroy',
            'description'   => 'Eliminar cualquier usuario del sistema',
        ]);

        //Roles
        Permission::create([
            'name'          => 'Navegar roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detaller de rol',
            'slug'          => 'roles.show',
            'description'   => 'Ver en detalles cada rol del sistema',
        ]);
        Permission::create([
            'name'          => 'Creación de roles',
            'slug'          => 'roles.create',
            'description'   => 'Ver en detalles cada rol del sistema',
        ]);
        Permission::create([
            'name'          => 'Edición de roles',
            'slug'          => 'roles.edit',
            'description'   => 'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar rol',
            'slug'          => 'roles.destroy',
            'description'   => 'Eliminar cualquier rol del sistema',
        ]);

        //Products
        Permission::create([
            'name'          => 'Navegar Productos',
            'slug'          => 'products.index',
            'description'   => 'Lista y navega todos los Productos del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detaller de producto',
            'slug'          => 'products.show',
            'description'   => 'Ver en detalles cada producto del sistema',
        ]);
        Permission::create([
            'name'          => 'Creación de Productos',
            'slug'          => 'products.create',
            'description'   => 'Ver en detalles cada producto del sistema',
        ]);
        Permission::create([
            'name'          => 'Edición de Productos',
            'slug'          => 'products.edit',
            'description'   => 'Editar cualquier dato de un producto del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar producto',
            'slug'          => 'products.destroy',
            'description'   => 'Eliminar cualquier producto del sistema',
        ]);
    }
}
