<?php

use Illuminate\Database\Seeder;
use App\User;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\User::class, 20)->create();

        Role::create([
            'name'          => 'Admin',
            'slug'          => 'admin',
            'description'   => 'Administrador del Sistema',
            'special'       => 'all-access'
        ]);

        User::create([
            'name'              => 'Administrador del Sistema',
            'email'             => 'admin@admin',
            'password'          => bcrypt('admin.admin'), //admin.admin
            'remember_token'    => str_random(10)
        ])->each(function(App\User $user){
            $user->roles()->attach(1);
        });

    }
}
