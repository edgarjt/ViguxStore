<?php

use Illuminate\Database\Seeder;

class PrecioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['pre_porcentaje' => 10, 'fk_user' => 1, 'fk_clave_producto' => 1],
            ['pre_porcentaje' => 20, 'fk_user' => 1, 'fk_clave_producto' => 4],
            ['pre_porcentaje' => 5, 'fk_user' => 1, 'fk_clave_producto' => 2],
            ['pre_porcentaje' => 6, 'fk_user' => 1, 'fk_clave_producto' => 5],
        );

        //No verfica las llaves foraneas
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        //Vacia los registros
        DB::table('precio')->truncate();

        foreach ($data as $item) {
            DB::table('precio')->insert($item);
        }
    }
}
