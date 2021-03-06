<?php

use Illuminate\Database\Seeder;

class PromocionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['aumento_porcentaje' => 5, 'fk_user' => 1, 'fk_clave_producto' => 1],
            ['aumento_porcentaje' => 5, 'fk_user' => 1, 'fk_clave_producto' => 2],
            ['aumento_porcentaje' => 5, 'fk_user' => 1, 'fk_clave_producto' => 3],
            ['aumento_porcentaje' => 6, 'fk_user' => 1, 'fk_clave_producto' => 4],
        );

        //No verfica las llaves foraneas
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        //Vacia los registros
        DB::table('promociones')->truncate();

        foreach ($data as $item) {
            DB::table('promociones')->insert($item);
        }
    }
}
