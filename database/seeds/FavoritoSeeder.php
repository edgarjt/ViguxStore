<?php

use Illuminate\Database\Seeder;

class FavoritoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['fk_user' => 3, 'fk_clave_producto' => 5],
            ['fk_user' => 6, 'fk_clave_producto' => 3],
            ['fk_user' => 8, 'fk_clave_producto' => 2],
            ['fk_user' => 2, 'fk_clave_producto' => 1],
        );

        //No verfica las llaves foraneas
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        //Vacia los registros
        DB::table('favoritos')->truncate();

        foreach ($data as $item) {
            DB::table('favoritos')->insert($item);
        }
    }
}
