<?php

namespace App\Http\Controllers\Admin;

use App\Cotizacion;
use App\Detalle;
use App\User;
use App\Vehiculo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CotizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cotizaciones = Cotizacion::all();
        return view('admin.cotizaciones.index', compact('cotizaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Vehiculo $vehiculo)
    {
        $cotizacion = Cotizacion::all();
        return view('admin.cotizaciones.create', compact('vehiculo', 'cotizacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Vehiculo $vehiculo)
    {
        $data = $request->validate([
            'vehiculo_id'   => '',
            'kilometraje'   => '',
            'fecha'         => '',
            'observacion'   => '',
        ]);

        $cotizacion = Cotizacion::create($data);

        switch($request->submitbutton) {

            case 'b':
                 return redirect()->route('admin.vehiculo.index', compact('cotizacion'))->withFlash('El vehículo fue registrado');
                break;

            case 'a':
                    return redirect()->route('admin.cotizacion.edit', compact('cotizacion'))->withFlash('El vehículo fue registrado');
                break;
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cotizacion $cotizacion,Vehiculo $vehiculo)
    {
        $detalles = Detalle::all();
        return view('admin.cotizaciones.edit', compact('cotizacion', 'vehiculo', 'detalles'));
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
