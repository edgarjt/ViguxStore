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
            ['cantidad' => 1, 'sub_total' => 300.0, 'fk_user' => 2, 'fk_clave_producto' => 1],
            ['cantidad' => 2, 'sub_total' => 600.0, 'fk_user' => 7, 'fk_clave_producto' => 4],
            ['cantidad' => 4, 'sub_total' => 100.0, 'fk_user' => 3, 'fk_clave_producto' => 2],
            ['cantidad' => 1, 'sub_total' => 800.0, 'fk_user' => 8, 'fk_clave_producto' => 5],
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
