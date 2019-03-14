@extends('admin.layout')
@section('content')
<div>
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <nav class="breadcrumb bg-white push">
                <a class="breadcrumb-item" href="{{ route('inicio') }}">Inicio</a>
                <span class="breadcrumb-item ">Vehiculos</span>
                <span class="breadcrumb-item active">Crear nuevo vehículo</span>

                {{--<a class="btn btn-success min-width-125 pull-right" href="{{ route('users.create') }}">--}}
                    {{--<i class="fa fa-user mr-5"></i>--}}
                    {{--Nuevo Cliente--}}
                {{--</a>--}}
            </nav>
            <div class="row justify-content-center ">
                <div class="col-md-6">
                    <div class="block block-sombraGM">
                        <div class="block-header bg-pulse-light">
                            <h3 class="block-title text-white">Datos vehículo</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-note text-white"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <!-- Normal Form -->
                            <div class="block">
                                <div class="block-content">
                                    <form method="POST" action="{{route('admin.vehiculo.store')}}" >
                                        {{ csrf_field() }}
                                        {{--Pauta para {{ $vehiculo->user->name }}--}}
                                        <div class="row justify-content-center mt-20">
                                            <div class="col-xl-10">
                                                <h4>Ingresar nuevo vehículo para :
                                                    <input  name="user_id" value="{{$user->id}}" style="display: none">
                                                    <b>

                                                        @if ($user->tipo === 'persona')
                                                            {{ $user -> name }} {{ $user -> lastname }}
                                                        @else
                                                             {{ $user -> name }}.
                                                        @endif


                                                    </b>
                                                </h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- END Select2 -->
                                        <div class="row justify-content-center mt-20">
                                            <div class="col-xl-10">
                                                <div class="form-group {{ $errors->has('patente') ? 'is-invalid' : '' }}  row">
                                                    <label class="col-lg-4 col-form-label" for="patente">Patente</label>
                                                    <div class="col-lg-8">
                                                        <input value="{{ old('patente') }}" class="form-control" id="patente" name="patente" placeholder="Patente Automovil">
                                                        {!! $errors->first('patente', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center mt-20">
                                            <div class="col-xl-10">
                                                <div class="form-group  {{ $errors->has('marca_id') ? 'is-invalid' : '' }} row">
                                                    <label class="col-lg-4  col-form-labe" for="example-select2">Marca Automovil</label>
                                                    <div class="col-lg-8">
                                                        <select class="form-control select2" id="example-select2" name="marca_id" style="width: 100%;" data-placeholder="Seleccione marca">
                                                            <option>Ingrese marca</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                            @foreach($marcas as $marca)
                                                                <option value="{{ $marca->id }}"
                                                                        {{ old('marca_id') == $marca->id ? 'selected' : '' }}
                                                                >{{ $marca->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        {!! $errors->first('marca_id', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center mt-20">
                                            <div class="col-xl-10">
                                                <div class="form-group  {{ $errors->has('modelo_id') ? 'is-invalid' : '' }} row">
                                                    <label class="col-lg-4  col-form-labe" for="example-select2">Modelo Automovil</label>
                                                    <div class="col-lg-8">
                                                        <select class="form-control select2" id="example-select2" name="modelo_id" style="width: 100%;" data-placeholder="Seleccione modelo del Vehiculo">
                                                            <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                            @foreach($modelos as $modelo)
                                                                <option value="{{ $modelo->id }}"
                                                                        {{ old('modelo_id') == $modelo->id ? 'selected' : '' }}
                                                                >{{ $modelo->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        {!! $errors->first('modelo_id', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-xl-10">
                                                <div class="form-group {{ $errors->has('ano') ? 'is-invalid' : '' }}  row">
                                                    <label class="col-lg-4" for="ano">Año</label>
                                                    <div class="col-lg-8">
                                                        <input  value="{{ old('ano') }}"  class="js-datepicker form-control" id="ano" name="ano" data-autoclose="true"  data-date-format="yyyy" placeholder="ingrese año de fabricación">
                                                        {!! $errors->first('ano', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-xl-10">
                                                <div class="form-group {{ $errors->has('kilo') ? 'is-invalid' : '' }}  row">
                                                    <label class="col-lg-4 col-form-label" for="kilo">Kilometraje</label>
                                                    <div class="col-lg-8">
                                                        <input  value="{{ old('kilo') }}"  class="form-control" id="kilo" name="kilo" placeholder="kilometraje Inicial">
                                                        {!! $errors->first('kilo', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-xl-10">
                                                <div class="form-group  row">
                                                    <label class="col-lg-4 col-form-label" for="cilindrada">Cilindrada</label>
                                                    <div class="col-lg-8">
                                                        <input value="{{ old('cilindrada') }}"  class="form-control" id="cilindrada" name="cilindrada" placeholder="cilindrada motor">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-xl-10">
                                                <div class="form-group {{ $errors->has('combustible_id') ? 'is-invalid' : '' }}  row">
                                                    <label class="col-lg-4 col-form-label" for="modelo">Combustible</label>
                                                    <div class="col-lg-8">
                                                        <label class="css-control-lg css-control-success css-radio">
                                                            <input
                                                                    {{ old('combustible_id') == "1" ? 'checked' : '' }}
                                                                    type="radio" class="css-control-input"
                                                                    name="combustible_id" value="1" >
                                                            <span class="css-control-indicator  ml-20 mr-20"></span>Bencina
                                                        </label>
                                                        <label class="css-control-lg css-control-success css-radio">
                                                            <input type="radio"
                                                                   {{ old('combustible_id') == "2" ? 'checked' : '' }}
                                                                   class="css-control-input  ml-50 mr-20"
                                                                   name="combustible_id" value="2">
                                                            <span class="css-control-indicator  ml-50 mr-20"></span>Diesel
                                                        </label>
                                                        {!! $errors->first('combustible_id', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Select2 -->
                                        <div class="form-group mb-50">
                                            <button class="btn btn-success  pull-right">Crear nuevo vehículo</button>

                                            <a href="{{ url()->previous() }}" class="btn btn-outline-primary  pull-right mr-20"> Cancelar</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
</div>
@stop
@push('styles')
    <link rel="stylesheet" href="/codebase/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="/codebase/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="/codebase/js/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="/codebase/js/plugins/select2/select2-bootstrap.min.css">
    <link rel="stylesheet" id="css-main" href="/codebase/css/codebase.min.css">
@endpush
@push('scripts')
    <script src="/codebase/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="/codebase/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="/codebase/js/plugins/select2/select2.full.min.js"></script>
    <script>
        jQuery(function () {
            // Init page helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
            Codebase.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
        });
    </script>
    <script type='text/javascript'>
        $('#ano').datepicker( {
            format: 'yyyy',
            viewMode: 'years',
            minViewMode: 'years',
            autoclose: true
        });
    </script>
    <script>
        $('.select2').select2({
            tags : true
        });
    </script>
@endpush