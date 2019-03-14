@extends('admin.layout')

@section('content')
    {{--<div class="bg-image" style="background-image: url('/codebase/img/photos/photo1@2x.jpg');">--}}
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
                <nav class="breadcrumb bg-white push">
                    <a class="breadcrumb-item" href="{{ route('inicio') }}">Inicio</a>
                    <span class="breadcrumb-item ">Cotizaciones</span>
                    <span class="breadcrumb-item active">Listado de Cotizaciones</span>
                </nav>
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Listado de Cotizaciones</h3>
                        <a href="{{ route('admin.vehiculo.index')  }}" class="btn btn-success min-width-125 pull-right">Listado de Vehículo</a>
                    </div>
                    <div class="block-content block-content-full">
                        <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 10%">N°C.O</th>
                                <th class="text-center" style="width: 15%">Patente</th>
                                <th>Marca</th>
                                <th class="d-none d-sm-table-cell">Fecha Ingreso</th>
                                <th class="d-none d-sm-table-cell text-center">Año</th>
                                <th class="d-none d-sm-table-cell text-center">Kilometraje</th>
                                <th class="d-none d-sm-table-cell text-center" style="width: 15%;">Cliente</th>
                                <th class="text-center" style="width: 15%;">Acción</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cotizaciones as $cotizacione)
                                <tr>
                                    <td class="text-center font-w600"> {{$cotizacione -> id}}</td>
                                    <td class="text-center"> <span class="patente">{{$cotizacione-> vehiculo -> patente}}</span> </td>
                                    <td class="text-center"> {{ optional($cotizacione ->fecha)->format('d M Y') }}</td>
                                    <td class=""></td>
                                    <td class="d-none d-sm-table-cell text-center"></td>
                                    <td class="font-w600 text-center"></td>
                                    <td class="d-none d-sm-table-cell text-center"></td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-sm btn-outline-info text-muted" data-toggle="tooltip" title="crear cotización">
                                            <i class="fa fa-file"></i>
                                        </a>
                                        <a href="" class="btn btn-sm btn-outline-success " data-toggle="tooltip" title="Ver Detalle">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.cotizacion.edit', $cotizacione) }}" type="button" class="btn btn-sm btn-outline-info" data-toggle="tooltip" title="Editar">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" title="Eliminar">
                                            <i class="fa fa-close"></i>
                                        </button>
                                    </td>
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