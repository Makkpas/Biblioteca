<?php

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
    }
}



// public function run()
//     {
//         $role = new Role();
//         $role->nombre = "admin";
//         $role->descripcion = "Admin Role";
//         $role->save();

//         $role = new Role();
//         $role->nombre = "moderador";
//         $role->descripcion = "Moderador Role";
//         $role->save();

//         $role = new Role();
//         $role->nombre = "user";
//         $role->descripcion = "User Role";
//         $role->save();
//     }