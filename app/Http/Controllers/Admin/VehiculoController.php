<?php

namespace App\Http\Controllers\Admin;

use App\Combustible;
use App\Cotizacion;
use App\Marca;
use App\Modelo;
use App\User;
use App\Vehiculo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos = Vehiculo::all();
        $user = User::all();
        $combustible = Combustible::all();
        return view('admin.vehiculos.index', compact('vehiculos','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $marcas =Marca::all();
        $modelos =Modelo::all();
        $combustibles = Combustible::all();
        return view('admin.vehiculos.create', compact('clientes','marcas', 'modelos', 'user', 'combustibles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $data = $request->validate([
            'user_id' => '',
            'patente' => 'required',
            'marca_id' => 'required',
            'modelo_id' => 'required',
            'ano' => 'required',
            'kilo' => '',
            'combustible_id' => 'required',
            'cilindrada' => 'required',
        ]);

        Vehiculo::create($data);


        return redirect()->route('admin.vehiculo.index')->withFlash('El vehículo fue registrado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user,Vehiculo $vehiculo, Cotizacion $cotizacion)
    {

        return view('admin.vehiculos.show', compact('user','vehiculo', 'cotizacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user,Vehiculo $vehiculo)
    {
        return view('admin.vehiculos.edit', compact('user','vehiculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
