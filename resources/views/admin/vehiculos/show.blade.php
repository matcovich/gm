@extends('admin.layout')

@section('content')

    {{--<div class="bg-image" style="background-image: url('/assets/img/photos/photo1@2x.jpg');">--}}
        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            @if (session()->has('flash'))
                <div class="alert alert-success alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="alert-heading font-size-h4 font-w400">{{ session('flash') }}</h3>
                    <p class="mb-0"></p>
                </div>

            @endif

            <div class="content">
                {{--<nav class="breadcrumb bg-white push">--}}
                    {{--<a class="breadcrumb-item" href="{{ route('inicio') }}">Inicio</a>--}}
                    {{--<span class="breadcrumb-item ">Vehículos</span>--}}
                    {{--<span class="breadcrumb-item active">Patente =  <b>{{ $vehiculo -> patente }}</b></span>--}}
                {{--</nav>--}}


                <h2 class="content-heading font-w600 text-primary">Datos: </h2>
                <div class="row row-deck gutters-tiny">
                    <!-- Billing Address -->
                    <div class="col-md-6">
                        <div class="block block-rounded">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Vehículo</h3>
                                <a href="{{route('admin.vehiculo.index')}}" class="btn btn-success min-width-125 pull-right">Ver listado vehículo</a>
                            </div>
                            <div class="block-content">
                                <div class="font-size-lg text-black mb-5"><b>Patente: </b>{{ $vehiculo -> patente }}</div>
                                <address>
                                    <b>Kilometraje: </b> {{ $vehiculo -> kilo }}<br><br>
                                    <b>Marca: </b>{{ $vehiculo -> marca -> name}}<br>
                                    <b>Modelo: </b>{{ $vehiculo -> modelo -> name }}<br><br>
                                    <b>Combustible: </b>{{ $vehiculo -> combustible -> name }}<br>
                                    <b>Cilindrada: </b> {{ $vehiculo -> cilindrada }}
                                </address>
                            </div>
                        </div>
                    </div>
                    <!-- END Billing Address -->

                    <!-- Shipping Address -->
                    <div class="col-md-6">
                        <div class="block block-rounded">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Cliente</h3>
                                <a href="{{route('admin.users.index')}}" class="btn btn-success min-width-125 pull-right">Ver listado clientes</a>
                            </div>
                            <div class="block-content">
                                <div class="font-size-lg text-black mb-5">
                                    @if ($vehiculo -> user->tipo === 'persona')
                                        <h3>{{ $vehiculo -> user -> name }} {{ $vehiculo -> user -> lastname }}</h3>
                                    @else
                                        <h3>{{ $vehiculo -> user -> name }}</h3>
                                    @endif
                                </div>
                                <address>
                                    @if ($vehiculo -> user->tipo === 'persona')
                                        <b>RUN: </b>{{ $vehiculo -> user -> run }}
                                    @else
                                        <b>RUT: </b>{{ $vehiculo -> user -> run }}<br>
                                        <b>Giro: </b> {{ $vehiculo -> user -> lastname }}
                                    @endif<br><br>
                                        <b>Ciudad: </b>{{ $vehiculo -> user -> ciudad }}<br>
                                        <b>Dirección: </b> {{ $vehiculo -> user -> direccion }}<br><br>
                                    <i class="fa fa-phone mr-5"></i> {{ $vehiculo -> user -> celular }} - {{ $vehiculo -> user -> telefono }}<br>
                                    <i class="fa fa-envelope-o mr-5"></i> <a href="javascript:void(0)">{{ $vehiculo -> user -> email }}</a>
                                </address>
                            </div>
                        </div>
                    </div>
                    <!-- END Shipping Address -->
                </div>


                <h2 class="content-heading font-w600 text-primary">Datos O.C</h2>
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Listado de OC</h3>
                        <a href="{{ route('admin.cotizacion.create', $vehiculo) }}" class="btn btn-success min-width-125 pull-right">Crear nueva OC</a>
                    </div>
                    <div class="block-content block-content-full">
                        <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 10%;">N° CO</th>
                                    <th class="d-none d-sm-table-cell" style="width: 20%;">Fecha de ingreso</th>
                                    <th class="d-none d-sm-table-cell" style="width: 20%;">Estado Orden de compra</th>
                                    <th class="d-none d-sm-table-cell" style="width: 20%;">Total</th>
                                    <th class="text-center" style="width: 20%;">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($vehiculo->cotizacion as $cotizacion)
                                <tr>
                                    <td>{{$cotizacion->id}}</td>
                                    <td>{{optional($cotizacion->fecha)->format('d M Y')}}</td>
                                    <td>dddd</td>
                                    <td>dddd</td>
                                    <td>aaaaa</td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    {{--</div>--}}
@stop