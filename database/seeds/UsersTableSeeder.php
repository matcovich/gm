<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $user = new User;


        $user->name = 'Héctor';
        $user->lastname = 'Matcovich';
        $user->email = 'matcovich@dixel.cl';
        $user->password ='123456';
        $user->admin ='1';

        $user->save();


        $user = new User;

        $user->name = 'Paulina';
        $user->lastname = 'Milla';
        $user->email = 'milla@dixel.cl';
        $user->password ='';
        $user->admin ='0';

        $user->run ='17055144-3';
        $user->tipo  ='persona';
        $user->celular ='98979695';
        $user->ciudad ='Copiapó';
        $user->direccion ='Oriente #258';
        $user->telefono ='';

        $user->save();

        $user = new User;

        $user->name = 'Dixel';
        $user->lastname = 'Dixel S.A';
        $user->email = 'hola@dixel.cl';
        $user->password ='';
        $user->admin ='0';

        $user->run ='52.025.125-5';
        $user->tipo  ='empresa';
        $user->celular ='98585452';
        $user->ciudad ='Santiago';
        $user->direccion ='Direccion N 2525';
        $user->telefono ='56 2 2 3635321';

        $user->save();
    }
}
