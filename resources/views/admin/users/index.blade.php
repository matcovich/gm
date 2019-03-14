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
                            <img class="img-avatar img-avatar96 img-avatar-thumb" src="/codebase/img/avatars/avatar15.jpg" alt="">
                    </div>
                    <!-- END Avatar -->
                    <!-- Personal -->
                    <h1 class="h3 text-white font-w700 mb-10"></h1>
                    <h2 class="h5 text-white-op">
                        {{ Auth::user()->name }}
                        <br>
                        <a class="text-primary-light" href="javascript:void(0)">{{ Auth::user()->email }}</a>
                    </h2>
                    <!-- END Personal -->
                    <!-- Actions -->
                    @if( Auth::user()->admin === 1 )

                        <a href="#" class="btn btn-rounded btn-hero btn-sm btn-alt-secondary mb-5" data-toggle="modal" data-target="#modal-fadein">
                            <i class="fa fa-user-plus mr-5"></i> Nuevo Cliente
                        </a>
                        <a href="{{ route('admin.vehiculo.index') }}" class="btn btn-rounded btn-hero btn-sm btn-alt-info mb-5 ml-50">
                            <i class="fa fa-car mr-5"></i> Listado de Vehículo
                        </a>
                    @endif

                <!-- END Actions -->
                </div>
            </div>
        </div>
        <!-- END User Info -->
            @include('admin.partials.flash')
        <!-- Main Content -->
        <div class="content bg-white mt-20 block-sombraGM mb-30 pb-50">
            <!-- tables GM -->
            <h2 class="content-heading">
                {{--<a href="" class="btn btn-sm btn-rounded btn-alt-secondary float-right">Volver</a>--}}
                <i class="si si-briefcase mr-5"></i> Clientes
            </h2>
            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                <thead>
                <tr>
                    <th class="text-center"></th>
                    <th>Nombre</th>
                    <th class="d-none d-sm-table-cell">Email</th>
                    <th class="d-none d-sm-table-cell">Celular</th>
                    <th class="d-none d-sm-table-cell">Dirección</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">Tipo</th>
                    <th class="text-center" style="width: 15%;">Acción</th>
                </tr>
                </thead>
                <tbody>

                @foreach($users as $user)
                    <tr>
                        <td class="text-center">{{$user->id}}</td>
                        @if($user->tipo === 'persona')
                            <td class="font-w600">{{$user-> name}} {{$user-> lastname}}</td>
                        @else
                            <td class="font-w600">{{$user-> name}}</td>
                        @endif
                        <td class="d-none d-sm-table-cell">{{$user-> email}}</td>
                        <td class="d-none d-sm-table-cell">{{$user-> celular}}</td>
                        <td class="d-none d-sm-table-cell">{{$user->direccion}}</td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-primary">{{ $user->tipo }}</span>
                        </td>
                        <td class="text-center">

                            <a href="{{ route('admin.users.edit', $user) }}"
                               class="btn btn-outline-warning  btn-sm"
                               data-toggle="tooltip" data-placement="top" title="editar"
                            >
                                <i class="fa fa-pencil"></i>
                            </a>

                            <a href="{{ route('admin.users.show', $user) }}"
                               class="btn btn-outline-info  btn-sm"
                               data-toggle="tooltip" data-placement="top" title="ver"
                            >
                                <i class="fa fa-eye"></i>
                            </a>

                            <a href="{{ route('admin.vehiculo.create', $user) }}"
                               class="btn btn-outline-info  btn-sm"
                               data-toggle="tooltip" data-placement="top" title="adjuntar auto"
                            >
                                <i class="fa fa-car"></i>
                            </a>

                                <form method="POST"
                                      action=" {{ route('admin.users.destroy', $user) }} "
                                      style="display: inline">
                                    {{ csrf_field() }} {{ method_field('DELETE') }}
                                    <button class="btn btn-danger btn-sm"
                                            data-toggle="tooltip" data-placement="right" title="Eliminar este usuario"
                                            onclick="return confirm('Estas seguro de querer eliminar este Post')"
                                    ><i class="fa fa-times"></i>
                                    </button>
                                </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            <!--End Tables GM -->
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