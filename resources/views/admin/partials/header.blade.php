
<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="content-header-section">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
            <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-navicon"></i>
            </button>
            <!-- END Toggle Sidebar -->
            <!-- Layout Options (used just for demonstration) -->
            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-options-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-wrench"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="page-header-options-dropdown">
                    <div class="d-none d-xl-block">
                        <h6 class="dropdown-header">Dimencionar Pantalla</h6>
                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="content_layout_toggle"><i class="fas fa-arrows-alt-h"></i> Ajustar</button>
                    </div>
                </div>
            </div>

        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="content-header-section">
            <!-- User Dropdown -->
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}<i class="fa fa-angle-down ml-5"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                    <a class="dropdown-item" href=#">
                        <i class="si si-user mr-5"></i> Perfil
                    </a>

                    {{--<a class="dropdown-item d-flex align-items-center justify-content-between" href="#">--}}
                        {{--<span><i class="si si-envelope-open mr-5"></i> Actividad</span>--}}
                        {{--<span class="badge badge-primary">3</span>--}}
                    {{--</a>--}}

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item"  href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        <i class="si si-logout mr-5"></i>
                        {{ __('Salir') }}
                    </a>


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>

                <button type="button" class="btn btn-dual bg-default-lighter" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <i class="fa fa-fw fa-bell text-white"></i>
                    <span class="badge badge-primary">5</span>
                </button>
            </div>
            <!-- END User Dropdown -->

        </div>
        <!-- END Right Section -->
    </div>

</header>