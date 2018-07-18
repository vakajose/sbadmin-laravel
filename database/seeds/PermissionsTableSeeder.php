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
        //Permisos

        //Permisos sobre los usuarios
        //el permiso de creacion no se añade
        Permission::create([
        	'name'			=> 'Navegar Usuarios',
        	'slug'			=> 'user.index',
        	'description'	=> 'Listado de Usuarios',
        ]);
        Permission::create([
        	'name'			=> 'Ver detalle Usuario',
        	'slug'			=> 'user.show',
        	'description'	=> 'Ver detalle de cada ususario del sistema',
        ]);
        Permission::create([
        	'name'			=> 'Edicion de Usuarios',
        	'slug'			=> 'user.edit',
        	'description'	=> 'Editar cualquier usuario  del Sistemas',
        ]);
        Permission::create([
        	'name'			=> 'Eliminar Usuarios',
        	'slug'			=> 'user.destroy',
        	'description'	=> 'Eliminar cualquier usuario  del Sistemas',
        ]);

        
        //Permisos sobre los roles

        Permission::create([
        	'name'			=> 'Navegar Roles',
        	'slug'			=> 'role.index',
        	'description'	=> 'Listado de Roles',
        ]);
        Permission::create([
        	'name'			=> 'Ver detalle Roles',
        	'slug'			=> 'role.show',
        	'description'	=> 'Ver detalle de cada rol del sistema',
        ]);
        Permission::create([
        	'name'			=> 'Creacion de Roles',
        	'slug'			=> 'role.create',
        	'description'	=> 'Ver detalle de cada rol del sistema',
        ]);
        Permission::create([
        	'name'			=> 'Edicion de Roles',
        	'slug'			=> 'role.edit',
        	'description'	=> 'Editar cualquier rol  del Sistemas',
        ]);

		Permission::create([
        	'name'			=> 'Eliminar Roles',
        	'slug'			=> 'role.destroy',
        	'description'	=> 'Eliminar cualquier rol  del Sistemas',
        ]);  

        //Permisos sobre los Modulos
        Permission::create([
        	'name'			=> 'Navegar Modulos',
        	'slug'			=> 'modulo.index',
        	'description'	=> 'Listado de Modulos',
        ]);
        Permission::create([
        	'name'			=> 'Ver detalle Modulos',
        	'slug'			=> 'modulo.show',
        	'description'	=> 'Ver detalle de cada modulo del sistema',
        ]);
        Permission::create([
        	'name'			=> 'Creacion de Modulos',
        	'slug'			=> 'modulo.create',
        	'description'	=> 'Ver detalle de cada modulo del sistema',
        ]);
        Permission::create([
        	'name'			=> 'Edicion de Modulos',
        	'slug'			=> 'modulo.edit',
        	'description'	=> 'Editar cualquier modulo  del Sistemas',
        ]);
        Permission::create([
        	'name'			=> 'Eliminar Modulos',
        	'slug'			=> 'modulo.destroy',
        	'description'	=> 'Eliminar cualquier modulo  del Sistemas',
        ]);

		
    }
}
