<?php


use App\Role;
use Illuminate\Database\Seeder;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->nombre = "admin";
        $role->descripcion = "Admin Role";
        $role->save();
        
        $role = new Role();
        $role->nombre = "moderador";
        $role->descripcion = "Moderador Role";
        $role->save();
        
        $role = new Role();
        $role->nombre = "user";
        $role->descripcion = "User Role";
        $role->save();
    }
}
