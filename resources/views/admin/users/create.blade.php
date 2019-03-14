<div class="modal fade" id="modal-fadein" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="{{route('admin.users.store')}}">
                {{ csrf_field() }}

                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-gm-form">
                            <h2 class="block-title">Crear un nuevo cliente </h2>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p class="font-size-h5">Elija si el cliente es una empresa o una persona.</p>
                            <div class="form-group row">
                                    <label class="col-12">Seleccionar:</label>
                                    <div class="col-12">

                                        @foreach(trans('users.tipos') as $tipo => $name)

                                            <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="radio" class="css-control-input" id="tipo_{{ $tipo }}" name="tipo" value="{{ $tipo }}">
                                                <span class="css-control-indicator"></span>
                                                <span class="custom-control-description">{{ $name }}</span>
                                            </label>

                                        @endforeach

                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Cerrar</button>
                        <button class="btn btn-alt-success">
                            <i class="fa fa-check"></i> Crear
                        </button>
                    </div>

            </form>
        </div>
    </div>
</div>