<nav id="sidebar">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="content-header content-header-fullrow px-15">
                <!-- Mini Mode -->
                <div class="content-header-section sidebar-mini-visible-b">
                    <!-- Logo -->
                    <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                    <span class="text-dual-primary-dark">G</span><span class="text-primary">M</span>
                                </span>
                    <!-- END Logo -->
                </div>
                <!-- END Mini Mode -->

                <!-- Normal Mode -->
                <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <!-- END Close Sidebar -->

                    <!-- Logo -->
                    <div class="content-header-item">
                        <a class="link-effect font-w700" href="#">
                            <i class="fas fa-oil-can text-primary"></i>
                            <span class="font-size-xl  text-primary">&nbsp; GM</span><span class="font-size-xl text-dual-primary-dark">Lubricentros</span>
                        </a>
                    </div>
                    <!-- END Logo -->
                </div>
                <!-- END Normal Mode -->
            </div>
            <!-- END Side Header -->


            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">

                    <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">Sección Usuarios</span></li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-user"></i><span class="sidebar-mini-hide">Clientes</span></a>
                        <ul>
                            <li>
                                <a href="" data-toggle="modal" data-target="#modal-fadein">Crear nuevo cliente</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.users.index') }}">Ver listado de clientes</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">Sección Vehículos</span></li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-user"></i><span class="sidebar-mini-hide">Viículos</span></a>
                        <ul>
                            <li>
                                <a href="">Crear nuevo cliente</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.vehiculo.index') }}">Ver listado de vehículos</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">Cotizaciones</span></li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-info"></i><span class="sidebar-mini-hide">Cotizaciones</span></a>
                        <ul>
                            <li>
                                <a href="">A</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.cotizacion.index') }}">Ver listado de cotizaciones</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">Título sección</span></li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-cup"></i><span class="sidebar-mini-hide">Menú Principal</span></a>
                        <ul>
                            <li>
                                <a href="#">Menú Secundario</a>
                            </li>
                            <li>
                                <a href="#">Menú Secundario</a>
                            </li>
                            <li>
                                <a href="#">Menú Secundario</a>
                            </li>
                            <li>
                                <a href="#">Menú Secundario</a>
                            </li>
                            <li>
                                <a href="#">Menú Secundario</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="si si-compass"></i><span class="sidebar-mini-hide">Menú Principal Estático</span></a>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>