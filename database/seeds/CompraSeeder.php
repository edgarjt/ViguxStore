<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['com_cantidad' => 1, 'com_subTotal' => 300.0, 'fk_user' => 2, 'fk_clave_producto' => 1],
            ['com_cantidad' => 2, 'com_subTotal' => 600.0, 'fk_user' => 7, 'fk_clave_producto' => 4],
            ['com_cantidad' => 4, 'com_subTotal' => 100.0, 'fk_user' => 3, 'fk_clave_producto' => 2],
            ['com_cantidad' => 1, 'com_subTotal' => 800.0, 'fk_user' => 8, 'fk_clave_producto' => 5],
        );

        //No verfica las llaves foraneas
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        //Vacia los registros
        DB::table('compras')->truncate();

        foreach ($data as $item) {
            DB::table('compras')->insert($item);
        }


    }
}
