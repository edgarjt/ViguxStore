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
            ['estado' => 'Tabasco', 'municipio' => 'Centro', 'codigo_postal' => '86126', 'colonia' => 'Buenavista', 'calle' => 'Azucena', 'numero_exterior' => '5', 'numero_interior' => '19', 'referencia' => 'Parque', 'fk_user' => 2],
            ['estado' => 'Monterrey', 'municipio' => 'Nuevo leon', 'codigo_postal' => '68945', 'colonia' => 'Apodaca', 'calle' => 'Lerdo', 'numero_exterior' => 'S/N', 'numero_interior' => 'S/N', 'referencia' => 'Escuela', 'fk_user' => 3],
            ['estado' => 'Ciudad de mexico', 'municipio' => 'Nezahualcóyotl', 'codigo_postal' => '24574', 'colonia' => 'Juarez', 'calle' => 'Constitucion', 'numero_exterior' => '6', 'numero_interior' => '3', 'referencia' => 'Purirficadora', 'fk_user' => 5],
            ['estado' => 'Guadalajara', 'municipio' => 'Jalisco', 'codigo_postal' => '86126', 'colonia' => 'Zapopan', 'calle' => 'Niños heroes', 'numero_exterior' => 'S/N', 'numero_interior' => 'S/N', 'referencia' => 'Farmacia', 'fk_user' => 8],
            ['estado' => 'Guerrero', 'municipio' => 'Acatepec', 'codigo_postal' => '35795', 'colonia' => 'Arista', 'calle' => 'Obraje', 'numero_exterior' => '65', 'numero_interior' => '43', 'referencia' => 'Casa color blanco', 'fk_user' => 4],
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

