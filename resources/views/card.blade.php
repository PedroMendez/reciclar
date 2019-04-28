<div class="col-md-6 mb-5">
    <div class="card">
        <div class="card-header"><h4>{{ $title }}</h4></div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <img src="{{ $svg }}" data-toggle="modal" data-target="#modal{{ $modal }}" style="cursor: pointer">
            <!-- Modal -->
            <div class="modal fade" id="modal{{ $modal }}" tabindex="-1" role="dialog" aria-labelledby="modal{{ $modal }}Label" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="POST" action="/{{ $singular }}">
                    @csrf

                        <div class="modal-header">
                            <h5 class="modal-title" id="modal{{ $modal }}Label">Detalle de lo que reciclaste</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input 
                                type="hidden" 
                                name="user_id"
                                id="user_id" 
                                aria-describedby="user_id" 
                                value="{{ Auth::user()->id }}">  
                            <div class="form-group row">
                                <label for="cantidad" class="col-sm-3 col-form-label">Cantidad</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="¿Qué cantidad de objetos reciclaste?">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="objeto" class="col-sm-3 col-form-label">Objeto</label>
                                <div class="col-sm-9">
                                    <input class="form-control" list="{{ $plural }}" name="{{ $singular }}" id="{{ $singular }}" placeholder="¿Qué objeto(s) reciclaste?">
                                        <datalist id="{{ $plural }}">
                                            <option value="{{ $option1 }}">
                                            <option value="{{ $option2 }}">
                                            <option value="{{ $option3 }}">
                                            <option value="{{ $option4 }}">
                                            <option value="{{ $option5 }}">
                                        </datalist>
                                </div>
                            </div>
                            <p>Recordá que los objetos tienen que estar limpios y secos.</p>
                            <p>Sin restos de residuos.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>  
                </div>
              </div>
            </div>
        </div>
    </div>
</div>