<?php

use App\Marca;
use Illuminate\Database\Seeder;

class MarcasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marca::create([
            'name' => 'Audi'
        ]);
        Marca::create([
            'name' => 'Chevrolet'
        ]);
        Marca::create([
            'name' => 'BMW'
        ]);
        Marca::create([
            'name' => 'Mercedez'
        ]);
        Marca::create([
            'name' => 'Ford'
        ]);
        Marca::create([
            'name' => 'Honda'
        ]);
        Marca::create([
            'name' => 'Kia'
        ]);
        Marca::create([
            'name' => 'Lada'
        ]);
        Marca::create([
            'name' => 'Nissan'
        ]);
    }
}
