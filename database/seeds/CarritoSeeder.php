<?php

use Illuminate\Database\Seeder;

class CarritoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['cantidad' => 1, 'sub_total' => 300.0, 'fk_user' => 3,'fk_clave_producto' => 1],
            ['cantidad' => 1, 'sub_total' => 400.0, 'fk_user' => 6,'fk_clave_producto' => 2],
            ['cantidad' => 1, 'sub_total' => 700.0, 'fk_user' => 7,'fk_clave_producto' => 3],
            ['cantidad' => 1, 'sub_total' => 100.0, 'fk_user' => 2,'fk_clave_producto' => 4],
        );

        //No verfica las llaves foraneas
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        //Vacia los registros
        DB::table('carrito')->truncate();

        foreach ($data as $item) {
            DB::table('carrito')->insert($item);
        }
    }
}
