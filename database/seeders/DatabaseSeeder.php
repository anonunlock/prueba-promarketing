<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'last_name' => 'Promarketing',
            'email' => 'admin@admin.com',
            'password' => bcrypt('Ap123456')
        ]);

        DB::table('juegos')->insert([
            'nombre' => 'BAMBOO RUSH',
            'url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=806&lang=es',
            'url_imagen' => 'https://winchiletragamonedas.com/public/images/games/bamboo_rush.jpeg',
            'estatus' => '1',
            'descripcion' => 'Descripcion BAMBOO RUSH',
        ]);
    }
}
