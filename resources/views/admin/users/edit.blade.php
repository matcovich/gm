@extends('admin.layout')

@section('content')

    <main id="main-container" class="bg-gm-form">
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
            @if( $user->tipo === 'empresa')
                <h2 class="content-heading text-white">Crear nueva empresa:</h2>
            @else
                <h2 class="content-heading text-white">Crear nuevo cliente:</h2>
            @endif


            <div class="col-md-12">
                <div class="block block-sombraGM">

                    <div class="block-content">


                        <form action="{{ route('admin.users.update', $user) }}" method="POST">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                                <div class="block-content block-content-full">

                                    <div class="row justify-content-center text-center">
                                        <div class="col-sm-8 col-md-6 col-lg-6 col-xl-4">

                                            @if ( $user->tipo === 'empresa')
                                                <div class="col-md-12 col-lg-12 ml-auto text-left">
                                                    <div class="form-group {{ $errors->has('name') ? 'is-invalid' : '' }}">
                                                        <label for="nombre">Nombre de la empresa:</label>
                                                        <input value="{{ old('name', $user->name) }}"
                                                               class="form-control"
                                                               id="nombre"
                                                               name="name"
                                                               placeholder="Ingrese nombre fantasía de la empresa"
                                                        >
                                                        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-lg-12 ml-auto text-left">
                                                    <div class="form-group {{ $errors->has('lastname') ? 'is-invalid' : '' }}">
                                                        <label for="lastname">Razon social:</label>
                                                        <input value="{{ old('lastname', $user->lastname) }}"
                                                               class="form-control"
                                                               id="lastname"
                                                               name="lastname"
                                                               placeholder="Ingrese razón social"
                                                        >
                                                        {!! $errors->first('lastname', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-lg-12 ml-auto text-left">
                                                    <div class="form-group {{ $errors->has('run') ? 'is-invalid' : '' }}">
                                                        <label for="run">RUT:</label>
                                                        <input value="{{ old('run', $user->run) }}"
                                                               class="form-control"
                                                               id="run"
                                                               name="run"
                                                               placeholder="Ingrese rol único tributario"
                                                        >
                                                        {!! $errors->first('run', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                </div>


                                            @else
                                                <div class="col-md-12 col-lg-12 ml-auto text-left">
                                                    <div class="form-group {{ $errors->has('name') ? 'is-invalid' : '' }}">
                                                        <label for="nombre">Nombre cliente:</label>
                                                        <input value="{{ old('name', $user->name) }}"
                                                               class="form-control"
                                                               id="nombre"
                                                               name="name"
                                                               placeholder="Ingrese nombre del cliente"

                                                        >
                                                        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-lg-12 ml-auto text-left">
                                                    <div class="form-group {{ $errors->has('lastname') ? 'is-invalid' : '' }}">
                                                        <label for="lastname">Apellido:</label>
                                                        <input value="{{ old('lastname', $user->lastname) }}"
                                                               class="form-control"
                                                               id="lastname"
                                                               name="lastname"
                                                               placeholder="Ingrese apellido del cliente"
                                                        >
                                                        {!! $errors->first('lastname', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                </div>


                                                <div class="col-md-12 col-lg-12 ml-auto text-left">
                                                    <div class="form-group {{ $errors->has('run') ? 'is-invalid' : '' }}">
                                                        <label for="run">RUN:</label>
                                                        <input value="{{ old('run', $user->run) }}"
                                                               class="form-control"
                                                               id="run"
                                                               name="run"
                                                               placeholder="Ingrese rol único nacional"
                                                        >
                                                        {!! $errors->first('run', '<div class="invalid-feedback">:message</div>') !!}
                                                    </div>
                                                </div>


                                            @endif


                                            <div class="col-md-12 col-lg-12 ml-auto text-left mt-50">
                                                <hr>
                                            </div>


                                            <div class="col-md-12 col-lg-12 ml-auto text-left">
                                                <div class="form-group {{ $errors->has('email') ? 'is-invalid' : '' }}">
                                                    <label for="email">Email:</label>
                                                    <input value="{{ old('email', $user->email) }}"
                                                           class="form-control"
                                                           id="email"
                                                           name="email"
                                                           placeholder="Ingrese el correo electrónico"
                                                           >
                                                    {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-lg-12 ml-auto text-left">
                                                <div class="form-group {{ $errors->has('celular') ? 'is-invalid' : '' }}">
                                                    <label for="celular">Celular:</label>
                                                    <input value="{{ old('celular', $user->celular) }}"
                                                           class="form-control"
                                                           id="celular"
                                                           name="celular"
                                                           placeholder="Ingrese numero"
                                                           >
                                                    {!! $errors->first('celular', '<div class="invalid-feedback">:message</div>') !!}
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-lg-12 ml-auto text-left">
                                                <div class="form-group {{ $errors->has('ciudad') ? 'is-invalid' : '' }}">
                                                    <label for="direccion">Ciudad:</label>
                                                    <input value="{{ old('ciudad', $user->ciudad) }}"
                                                           class="form-control"
                                                           id="ciudad"
                                                           name="ciudad"
                                                           placeholder="Ciudad de recidencia"
                                                           >
                                                    {!! $errors->first('ciudad', '<div class="invalid-feedback">:message</div>') !!}
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-lg-12 ml-auto text-left">
                                                <div class="form-group {{ $errors->has('direccion') ? 'is-invalid' : '' }}">
                                                    <label for="direccion">Dirección:</label>
                                                    <input value="{{ old('direccion', $user->direccion) }}"
                                                           class="form-control"
                                                           id="direccion"
                                                           name="direccion"
                                                           placeholder="Ingrese nombre y numero del domicilio"
                                                           >
                                                    {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-lg-12 ml-auto text-left">
                                                <div class="form-group {{ $errors->has('telefono') ? 'is-invalid' : '' }}">
                                                    <label for="telefono">Telefono:</label>
                                                    <input value="{{ old('telefono', $user->telefono) }}"
                                                           class="form-control"
                                                           id="telefono"
                                                           name="telefono"
                                                           placeholder="Ingrese su telefono (opcional)"
                                                           >
                                                    {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
                                                </div>
                                            </div>



                                        </div>
                                    </div>

                                    <div class="form-group mb-50">

                                        <button type="submit" class="btn btn-success  pull-right">Guardar datos</button>

                                        <a href="{{ route('admin.users.index') }}" class="btn btn-outline-primary  pull-right mr-20"> Cancelar</a>
                                    </div>

                                </div>

                        </form>

                    </div>
                </div>
            </div>



        </div>


    </main>

@endsection