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
            ['car_cantidad' => 1, 'car_subTotal' => 300.0, 'fk_user' => 3,'fk_clave_producto' => 1],
            ['car_cantidad' => 1, 'car_subTotal' => 400.0, 'fk_user' => 6,'fk_clave_producto' => 2],
            ['car_cantidad' => 1, 'car_subTotal' => 700.0, 'fk_user' => 7,'fk_clave_producto' => 3],
            ['car_cantidad' => 1, 'car_subTotal' => 100.0, 'fk_user' => 2,'fk_clave_producto' => 4],
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
