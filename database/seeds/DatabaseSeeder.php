<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        $this->truncateTable([
            'users',
            'modelos',
            'marcas',
            'vehiculos',
        ]);

        $this->call([
            UsersTableSeeder::class,
            ModelosTableSeeder::class,
            MarcasTableSeeder::class,
            VehiculosTableSeeder::class,
        ]);
    }

    protected function truncateTable(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        foreach ($tables as $table){
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
