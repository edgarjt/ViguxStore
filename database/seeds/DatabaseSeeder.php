<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(CompraSeeder::class);
         $this->call(PrecioSeeder::class);
         $this->call(FavoritoSeeder::class);
         $this->call(PromocionSeeder::class);
         $this->call(DireccionSeeder::class);
         $this->call(CarritoSeeder::class);
    }
}
