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

                <!-- Invoice -->
                <h2 class="content-heading d-print-none">
                    <a href="{{ url()->previous() }}" class="btn btn-sm btn-rounded btn-success float-right">Volver</a>
                    Crear Cotización
                </h2>
                <div class="block">
                    <div class="block-header block-header-default">
                        {{--<h3 class="block-title">Cotización N°= X</h3>--}}
                        <div class="block-options">
                            <!-- Print Page functionality is initialized in Codebase() -> uiHelperPrint() -->
                            <button type="button" class="btn-block-option" onclick="Codebase.helpers('print-page');">
                                <i class="si si-printer"></i> Vista Impresión
                            </button>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <!-- Invoice Info -->
                        <div class="row my-20">
                            <!-- Company Info -->
                            <div class="col-6">
                                <p class="h3"><span class="text-primary">GM</span><span class="text-muted">|</span>Lubricentros</p>
                                <address>
                                    Ventas Montenegro y González y Cia ltda<br>
                                    76.333.462-7<br>
                                    Av.Ramón Freire 466<br>
                                    Copiapó<br>
                                    9 970 29 39 8<br>
                                    GMLubricentros@gmail.com
                                </address>
                            </div>
                            <!-- END Company Info -->
                            <!-- Client Info -->
                            <div class="col-6 text-right">
                                <p class="h3">
                                    @if ($vehiculo-> user->tipo === 'persona')
                                        {{ $vehiculo -> user -> name }} {{ $vehiculo -> user -> lastname }}
                                    @else
                                        {{ $vehiculo -> user -> name }}.
                                    @endif
                                </p>
                                <address>
                                    @if ($vehiculo-> user->tipo === 'empresa')
                                        {{ $vehiculo -> user -> lastname }} <br>
                                    @endif
                                        {{ $vehiculo -> user -> direccion }}<br>
                                        {{ $vehiculo -> user -> ciudad }}<br>
                                        <b>{{ $vehiculo -> user -> run }}</b><br>
                                        {{ $vehiculo -> user -> celular }}<br>
                                        {{ $vehiculo -> user -> telefono }}
                                </address>
                            </div>
                            <!-- END Client Info -->
                        </div>
                        <!-- END Invoice Info -->
                        <!-- Table -->
                        <div class="table-responsive push">
                            <table class="table table-bordered table-hover">
                                <thead class="thead-inverse">
                                <tr>
                                    <th colspan="5" class="text-center"  >Datos del Vehiculo</th>
                                </tr>
                                </thead>
                                <thead class="bg-body-light">
                                <tr>
                                    <th class="text-center" style="width: 90px;font-weight: 400;text-transform: capitalize; font-size: 12px;">N°Patente</th>
                                    <th class="text-center" style="width: 120px;font-weight: 400;text-transform: capitalize; font-size: 12px;">Kilometraje actual</th>
                                    <th style="width: 120px;font-weight: 400;text-transform: capitalize; font-size: 12px;">Observación</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center"> <p class="font-w600"> <small>{{ $vehiculo->patente }}</small> </p>  </td>
                                    <td>
                                        <a href="" class="btn btn-rounded btn-hero btn-sm btn-alt-secondary mb-5" data-toggle="modal" data-target="#modal-fadeinD">
                                            <i class="fa fa-info-circle mr-5"></i> agregar kilometraje
                                        </a>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-rounded btn-hero btn-sm btn-alt-secondary mb-5" data-toggle="modal" data-target="#modal-fadeinD">
                                            <i class="fa fa-info-circle mr-5"></i> agregar observación
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive push">
                            <table class="table table-bordered table-hover">
                                <thead class="bg-danger text-white">
                                <tr>
                                    <th class="text-center" style="width: 90px;">Cantidad</th>
                                    <th>Descripción producto</th>
                                    <th class="text-center" style="width: 140px;">Precio unidad</th>
                                    <th class="text-right" style="width: 120px;">Precio neto</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center">-</td>
                                    <td> </td>
                                    <td class="text-right">-</td>
                                    <td class="text-right">-</td>
                                </tr>

                                <tr class="table-info">
                                    <td colspan="3" class="font-w600 text-right">Subtotal</td>
                                    <td class="text-right">$</td>
                                </tr>
                                <tr class="table-warning">
                                    <td colspan="3" class="font-w600 text-right">I.V.A 19%</td>
                                    <td class="text-right">$</td>
                                </tr>
                                <tr class="table-success">
                                    <td colspan="3" class="font-w700 text-uppercase text-right">Total</td>
                                    <td class="font-w700 text-right">$</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- END Table -->
                        <!-- Footer -->
                        <p class="text-muted text-center">Gracias por su confianza.</p>
                        <!-- END Footer -->
                    </div>
                </div>
                <!-- END Invoice -->

            </div>
        </main>
        <!-- END Main Container -->
    {{--</div>--}}

    <div class="modal fade" id="modal-fadeinD" tabindex="-1" role="dialog" aria-labelledby="modal-fadeinD" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form method="POST" action="{{route('admin.cotizacion.store')}}">
                    {{ csrf_field() }}

                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-gm-form">
                            <h2 class="block-title">Ingresar datos</h2>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p class="font-size-h5">Ingresar kilometraje actual y observaciones:</p>
                            <div class="form-group row">
                                <input  name="vehiculo_id" value="{{$vehiculo->id}}" style="display:none;">

                                <div class="col-12">
                                    <div class="form-group row">
                                        <label class="col-12" for="example-datepicker1">Ingrese fecha</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="js-datepicker form-control" id="example-datepicker1" name="fecha" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yyyy" placeholder="mm/dd/yy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <label class="col-12" for="example-text-input-valid">Kilometraje actual</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control is-valid" id="example-text-input-valid" name="kilometraje" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <label class="col-12" for="js-ckeditor-inline">Observaciones</label>
                                        <div class="col-lg-12">
                                            <textarea id="js-ckeditor-inline"  name="observacion" placeholder="Observaciones acerca del vehículo" >Observaciones acerca del vehículo</textarea>
                                            {{--<textarea class="form-control" name="observacion" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="Observaciones acerca del vehículo"></textarea>--}}
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Cerrar</button>
                        <button class="btn btn-alt-success" name="submitbutton" value="a">
                            <i class="fa fa-check"></i> Crear
                        </button>
                        <button class="btn btn-alt-success" name="submitbutton" value="b">
                            <i class="fa fa-check"></i> Crear y enviar
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@stop

@push('styles')
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="/codebase/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
@endpush

@push('scripts')


<script src="/codebase/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="/codebase/js/plugins/ckeditor/ckeditor.js"></script>
<!-- Page JS Code -->
<script>

    jQuery(function () {
        // Init page helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins )
        Codebase.helpers(['ckeditor','datepicker']);
    });
</script>
@endpush