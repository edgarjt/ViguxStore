<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create users root
        $users = array(
            ['name' => 'root', 'ap_paterno' => 'root', 'ap_materno' => 'root', 'email' => 'root@viguxtore.com', 'password' => Hash::make('root'), 'telefono' => 'root', 'role' => 0]
        );

        foreach ($users as $item) {
            User::create($item);
        }
    }
}
