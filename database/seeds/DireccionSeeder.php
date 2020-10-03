<?php

use Illuminate\Database\Seeder;

class DireccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['dir_estado' => 'Tabasco', 'dir_municipio' => 'Centro', 'dir_codPostal' => '86126', 'dir_colonia' => 'Buenavista', 'dir_calle' => 'Azucena', 'dir_numExterior' => '5', 'dir_numInterior' => '19', 'dir_referencia' => 'Parque', 'fk_user' => 2],
            ['dir_estado' => 'Monterrey', 'dir_municipio' => 'Nuevo leon', 'dir_codPostal' => '68945', 'dir_colonia' => 'Apodaca', 'dir_calle' => 'Lerdo', 'dir_numExterior' => 'S/N', 'dir_numInterior' => 'S/N', 'dir_referencia' => 'Escuela', 'fk_user' => 3],
            ['dir_estado' => 'Ciudad de mexico', 'dir_municipio' => 'Nezahualcóyotl', 'dir_codPostal' => '24574', 'dir_colonia' => 'Juarez', 'dir_calle' => 'Constitucion', 'dir_numExterior' => '6', 'dir_numInterior' => '3', 'dir_referencia' => 'Purirficadora', 'fk_user' => 5],
            ['dir_estado' => 'Guadalajara', 'dir_municipio' => 'Jalisco', 'dir_codPostal' => '86126', 'dir_colonia' => 'Zapopan', 'dir_calle' => 'Niños heroes', 'dir_numExterior' => 'S/N', 'dir_numInterior' => 'S/N', 'dir_referencia' => 'Farmacia', 'fk_user' => 8],
            ['dir_estado' => 'Guerrero', 'dir_municipio' => 'Acatepec', 'dir_codPostal' => '35795', 'dir_colonia' => 'Arista', 'dir_calle' => 'Obraje', 'dir_numExterior' => '65', 'dir_numInterior' => '43', 'dir_referencia' => 'Casa color blanco', 'fk_user' => 4],
        );

        //No verfica las llaves foraneas
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        //Vacia los registros
        DB::table('direccion')->truncate();

        foreach ($data as $item) {
            DB::table('direccion')->insert($item);
        }
    }
}

