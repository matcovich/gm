@if (session()->has('flash'))
    <div class="alert alert-success alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="alert-heading font-size-h4 font-w400">{{ session('flash') }}</h3>
        <p class="mb-0"></p>
    </div>

@endif