@extends('admin.layout')
@section('content')

    <main id="main-container" class="bg-gm-form">
                    <div class="container mt-100">
                        <h1 class="h3 font-w700 text-white mb-10 mt-100">
                            Bienvenido {{ Auth::user()->name }}
                        </h1>
                    </div>
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