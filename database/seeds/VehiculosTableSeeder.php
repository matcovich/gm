<?php

use App\Combustible;
use Illuminate\Database\Seeder;

class VehiculosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Combustible::truncate();

        $combustible = new Combustible;
        $combustible->name = 'Bencina';
        $combustible->save();

        $combustible = new Combustible;
        $combustible->name = 'Diesel';
        $combustible->save();
    }
}
