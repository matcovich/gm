<?php

use App\Modelo;
use Illuminate\Database\Seeder;

class ModelosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modelo::create([
            'name' => 'ModeloDelAudi'
        ]);
        Modelo::create([
            'name' => 'ModeloDelChevrolet'
        ]);
        Modelo::create([
            'name' => 'ModeloDelBMW'
        ]);
        Modelo::create([
            'name' => 'ModeloDelMercedez'
        ]);
        Modelo::create([
            'name' => 'ModeloDelFord'
        ]);
        Modelo::create([
            'name' => 'ModeloDelHonda'
        ]);
        Modelo::create([
            'name' => 'ModeloDelKia'
        ]);
        Modelo::create([
            'name' => 'ModeloDelLada'
        ]);
        Modelo::create([
            'name' => 'ModeloDelNissan'
        ]);

    }
}
