<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create users root
        $users = array(
            ['name' => 'root', 'ap_paterno' => 'González', 'ap_materno' => 'Rodríguez', 'email' => 'root@viguxtore.com', 'password' => Hash::make('root'), 'telefono' => 'root', 'role' => 0],
            ['name' => 'Aitor', 'ap_paterno' => 'Gómez', 'ap_materno' => 'Fernández', 'email' => 'aitor@test.com', 'password' => Hash::make('12345678'), 'telefono' => '6174444699', 'role' => 1],
            ['name' => 'Alan', 'ap_paterno' => 'López', 'ap_materno' => 'Romero', 'email' => 'alan@test.com', 'password' => Hash::make('12345678'), 'telefono' => '800912232', 'role' => 1],
            ['name' => 'Alberto', 'ap_paterno' => 'Díaz', 'ap_materno' => 'Ruiz', 'email' => 'alberto@test.com', 'password' => Hash::make('12345678'), 'telefono' => '8774252832', 'role' => 1],
            ['name' => 'Bautista', 'ap_paterno' => 'Martínez', 'ap_materno' => 'Torres', 'email' => 'bautista@test.com', 'password' => Hash::make('12345678'), 'telefono' => '7222106061', 'role' => 1],
            ['name' => 'Biel', 'ap_paterno' => 'Pérez', 'ap_materno' => 'Ramírez', 'email' => 'biel@test.com', 'password' => Hash::make('12345678'), 'telefono' => '9222258846', 'role' => 1],
            ['name' => 'Bruno', 'ap_paterno' => 'García', 'ap_materno' => 'Flores', 'email' => 'bruno@test.com', 'password' => Hash::make('12345678'), 'telefono' => '7223173200', 'role' => 1],
            ['name' => 'Carlos', 'ap_paterno' => 'Sánchez', 'ap_materno' => 'Benítez', 'email' => 'carlos@test.com', 'password' => Hash::make('12345678'), 'telefono' => '2383820996', 'role' => 1],
        );

        //No verfica las llaves foraneas
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        //Vacia los registros
        DB::table('users')->truncate();

        foreach ($users as $item) {
            DB::table('users')->insert($item);
        }

    }
}
