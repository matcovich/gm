@extends('admin.layout')

@section('content')
    <main id="main-container">
        <!-- Page Content -->
        <!-- User Info -->
        <div class="bg-image bg-image-bottom" style="background-image: url('/codebase/img/photos/copiapo.jpg');">
            <div class="bg-primary-dark-op py-30">
                <div class="content content-full text-center">
                    <!-- Avatar -->
                    <div class="mb-15">
                        @if($user->tipo === 'empresa')
                                <img class="img-avatar img-avatar96 img-avatar-thumb" src="/codebase/img/avatars/avatar1.jpg" alt="">
                            @else
                                <img class="img-avatar img-avatar96 img-avatar-thumb" src="/codebase/img/avatars/avatar15.jpg" alt="">
                        @endif

                    </div>
                    <!-- END Avatar -->

                    <!-- Personal -->
                    <h1 class="h3 text-white font-w700 mb-10">{{ $user->name }} {{ $user->lastname }}</h1>
                    <h2 class="h5 text-white-op">
                        <i class="fa fa-mobile"></i> {{ $user->celular }} | <a class="text-default-light"> <i class="fa fa-envelope"></i> {{ $user->email }} </a>
                    </h2>
                    <!-- END Personal -->

                    <!-- Actions -->
                    <a href="{{ route('admin.users.index') }}" class="btn btn-rounded btn-hero btn-sm btn-alt-secondary mb-5">
                        <i class="fa fa-arrow-left mr-5"></i> Volver
                    </a>

                    <a href="{{ route('admin.vehiculo.create', $user) }}" class="btn btn-rounded btn-hero btn-sm btn-alt-info mb-5 ml-50">
                        <i class="fa fa-car mr-5"></i> Nuevo Vehículo
                    </a>
                    <!-- END Actions -->
                </div>
            </div>
        </div>
        <!-- END User Info -->

        <!-- Main Content -->
    <div class="content">
        @include('admin.partials.flash')
        <h2 class="content-heading font-w600 text-primary">Datos Cliente</h2>
        <div class="row row-deck gutters-tiny">
            <!-- Billing Address -->
            <div class="col-md-12">
                <div class="block block-rounded">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block-content">
                                <div class=" text-primary font-weight-bold text-center">

                                    @if ($user->tipo === 'persona')
                                        <h3>{{ $user -> name }} {{ $user -> lastname }}</h3>
                                    @else
                                        <h3>{{ $user -> name }}</h3>
                                    @endif

                                </div>
                                <hr>
                            </div>
                        </div><div class="col-md-4">
                            <div class="block-content font-size-lg">
                                <address>
                                    @if ($user->tipo === 'persona')
                                        <b>RUN: </b>{{ $user -> run }}
                                    @else
                                        <b>RUT: </b>{{ $user -> run }}<br>
                                        <b>Giro: </b> {{ $user -> lastname }}
                                    @endif
                                    </address>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="block-content font-size-lg">
                                <address>
                                    <i class="fa fa-phone mr-5"></i> {{ $user -> celular }} - {{ $user -> telefono }}<br>
                                    <i class="fa fa-envelope-o mr-5"></i> <a href="javascript:void(0)">{{ $user -> email }}</a>
                                </address>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="block-content font-size-lg">
                                <address>
                                    <b>Ciudad: </b>{{ $user -> ciudad }}<br>
                                    <b>Dirección: </b> {{ $user -> direccion }}
                                </address>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END Billing Address -->

            <!-- END Shipping Address -->
        </div>
        <!-- Overview -->
        <h2 class="content-heading font-w600 text-primary">En sistema</h2>
        <div class="row gutters-tiny">
            <!-- Orders -->
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-line-chart fa-2x text-body-bg-dark"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0" data-toggle="countTo"
                                    {{--data-to="{{$trabajos->count()}}"--}}
                            >0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Trabajos</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Orders -->

            <!-- In Cart -->
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-car fa-2x text-body-bg-dark"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0" data-toggle="countTo" data-to="
                                        {{$user->vehiculos->count()}}
                                    ">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Automoviles</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END In Cart -->
            <!-- Edit Customer -->
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-link-shadow" href="{{ route('admin.users.edit', $user) }}">
                    <div class="block-content block-content-full block-sticky-options">
                        <div class="block-options">
                            <div class="block-options-item">
                                <i class="fa fa-user fa-2x text-info-light"></i>
                            </div>
                        </div>
                        <div class="py-20 text-center">
                            <div class="font-size-h2 font-w700 mb-0 text-info">
                                <i class="fa fa-pencil"></i>
                            </div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Editar datos</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END Edit Customer -->
            <!-- Remove Customer -->
            <div class="col-md-6 col-xl-3">
                <form method="POST"
                      action=" {{ route('admin.users.destroy', $user) }} "
                      style="display: inline">
                    {{ csrf_field() }} {{ method_field('DELETE') }}
                    <button
                            style=" color: #858585;background-color: white;border-width: 0px;border-style: outset;border-color: buttonface;border-image: initial;
                                    transition: opacity .2s ease-out;
                                    margin: 0 auto;
                                    padding: 0px;
                                    width: 100%;
                                    overflow-x: visible;
                                    margin-bottom: 6px;"
                            onclick="return confirm('Estas seguro de querer eliminar este Post')"
                    >

                        <a class="block block-rounded block-link-shadow" href="javascript:void(0)">

                            <div class="block-content block-content-full block-sticky-options">
                                <div class="block-options">
                                    <div class="block-options-item">
                                        <i class="fa fa-user fa-2x text-danger-light"></i>
                                    </div>
                                </div>
                                <div class="py-20 text-center">
                                    <div class="font-size-h2 font-w700 mb-0 text-danger">
                                        <i class="fa fa-times"></i>
                                    </div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">
                                        Eliminar
                                    </div>
                                </div>
                            </div>
                        </a>
                    </button>
                </form>
            </div>
            <!-- END Remove Customer -->
        </div>
        <!-- END Overview -->
        <!-- Cart -->
        <h2 class="content-heading font-w600 text-primary">Autos</h2>
        <div class="block block-rounded">
            <div class="block-content">
                <!-- Products Table -->
                <table class="table table-borderless table-striped">
                    <thead>
                    <tr>
                        <th style="width: 100px;">ID</th>
                        <th class="d-none d-sm-table-cell text-center">Numero de Patente</th>
                        <th class="d-none d-sm-table-cell">Marca</th>
                        <th class="d-none d-md-table-cell">Modelo</th>
                        <th  style="width: 150px;">Status</th>
                        <th>Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user->vehiculos as $vehiculo)

                        <tr>

                            <td>
                                <a class="font-w600" href="#">{{$vehiculo -> id }}</a>
                            </td>
                            <td class="d-none d-sm-table-cell text-center">
                                <span class="patente">{{$vehiculo->patente }}</span>
                            </td>
                            <td class="d-none d-sm-table-cell">

                                {{$vehiculo->marca -> name }}
                            </td>
                            <td>
                                {{$vehiculo->modelo -> name }}
                            </td>

                            <td >
                                <span class="badge badge-info"> OK </span>
                            </td>

                            <td>
                                <a
                                        {{--href="{{ route('admin.vehiculo.show', $vehiculo) }}" --}}
                                        class="btn btn-sm btn-outline-success " data-toggle="tooltip" title="Ver Detalle">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>

                        </tr>

                    @endforeach
                    </tbody>
                </table>
                <!-- END Products Table -->
            </div>
        </div>
        <!-- END Cart -->
    </div>
    <!-- END Main Content -->
        <!-- END Page Content -->
    </main>

@endsection

@push('styles')
    <link rel="stylesheet" href="/codebase/js/plugins/datatables/dataTables.bootstrap4.min.css">
@endpush

@push('scripts')
    <!-- Page JS Plugins -->
    <script src="/codebase/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/codebase/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page JS Code -->
    <script src="/codebase/js/pages/be_tables_datatables.js"></script>
@endpush