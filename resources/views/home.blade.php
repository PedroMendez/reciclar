@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mb-5">
            <div class="card">
                <div class="card-header"><h4>Plástico</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="{{ asset('/svg/plastico.svg') }}" data-toggle="modal" data-target="#modalPlastico" style="cursor: pointer">
                    <!-- Modal -->
                    <div class="modal fade" id="modalPlastico" tabindex="-1" role="dialog" aria-labelledby="modalPlasticoLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form method="POST" action="/plastico">
                            @csrf

                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalPlasticoLabel">Detalle de lo que reciclaste</h5>
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
                                            <input class="form-control" list="plasticos" name="plastico" id="plastico" placeholder="¿Qué objeto(s) reciclaste?">
                                                <datalist id="plasticos">
                                                    <option value="tapitas de plástico">
                                                    <option value="botellas de PET">
                                                    <option value="envases de alimentos">
                                                    <option value="sillas de plástico">
                                                    <option value="mesa de plástico">
                                                    <option value="bidones">
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
        <div class="col-md-6 mb-5">
            <div class="card">
                <div class="card-header"><h4>Cartón</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="{{ asset('/svg/carton.svg') }}" data-toggle="modal" data-target="#modalCarton" style="cursor: pointer">
                    <!-- Modal -->
                    <div class="modal fade" id="modalCarton" tabindex="-1" role="dialog" aria-labelledby="modalCartonLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form method="POST" action="/carton">
                                @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalCartonLabel">Detalle de lo que reciclaste</h5>
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
                                            <input class="form-control" list="cartones" name="carton" id="carton" placeholder="¿Qué objeto(s) reciclaste?">
                                            <datalist id="cartones">
                                                <option value="formularios continuos">
                                                <option value="cajas">
                                                <option value="envases">
                                                <option value="carpetas">
                                                <option value="biblioratos">
                                            </datalist>
                                        </div>
                                    </div>
                                        <p>Recordá que los cartones tienen que estar limpios y secos</p>
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
        <div class="col-md-6 mb-5">
            <div class="card">
                <div class="card-header"><h4>Papel</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="{{ asset('/svg/papel.svg') }}" data-toggle="modal" data-target="#modalPapel" style="cursor: pointer">
                    <!-- Modal -->
                    <div class="modal fade" id="modalPapel" tabindex="-1" role="dialog" aria-labelledby="modalPapelLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form method="POST" action="/papel">
                            @csrf
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalPapelLabel">Detalle de lo que reciclaste</h5>
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
                                        <input class="form-control" list="papeles" name="papel" id="papel" placeholder="¿Qué objeto(s) reciclaste?">
                                        <datalist id="papeles">
                                            <option value="papel blanco">
                                            <option value="papel de color">
                                            <option value="sobres de cualquier tipo de papel">
                                            <option value="diarios">
                                            <option value="revistas">
                                            <option value="formularios continuos">
                                            <option value="biblioratos">
                                            <option value="guías telefónicas">
                                        </datalist>
                                    </div>
                                </div>
                                <p>Recordá que los papeles tienen que estar limpios y secos</p>
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
        <div class="col-md-6 mb-5">
            <div class="card">
                <div class="card-header"><h4>Metal</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="{{ asset('/svg/metal.svg') }}" data-toggle="modal" data-target="#modalMetal" style="cursor: pointer">
                    <!-- Modal -->
                    <div class="modal fade" id="modalMetal" tabindex="-1" role="dialog" aria-labelledby="modalMetalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form method="POST" action="/metal">
                            @csrf    
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalMetalLabel">Detalle de lo que reciclaste</h5>
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
                                        <input class="form-control" list="metales" name="metal" id="metal" placeholder="¿Qué objeto(s) reciclaste?">
                                        <datalist id="metales">
                                            <option value="latas">
                                            <option value="envases de acero">
                                            <option value="aluminio">
                                            <option value="hierro">
                                            <option value="plomo">
                                            <option value="cobre">
                                            <option value="bronce">
                                            <option value="otros metales ferrosos">
                                        </datalist>
                                    </div>
                                </div>
                                <p>Recordá que los metales tienen que estar limpios y secos.</p>
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h4>Vidrio</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="{{ asset('/svg/vidrio.svg') }}" data-toggle="modal" data-target="#modalVidrio" style="cursor: pointer">

                    <!-- Modal -->
                    <div class="modal fade" id="modalVidrio" tabindex="-1" role="dialog" aria-labelledby="modalVidrioLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form method="POST" action="/vidrio">
                            @csrf 
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalVidrioLabel">Detalle de lo que reciclaste</h5>
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
                                        <input class="form-control" list="vidrios" name="vidrio" id="vidrio" placeholder="¿Qué objeto(s) reciclaste?">
                                        <datalist id="vidrios">
                                            <option value="botellas">
                                            <option value="frascos">
                                            <option value="envases">
                                            <option value="vasos de vidrio verde">
                                            <option value="vasos de vidrio blanco">
                                            <option value="vasos de vidrio marrón">
                                        </datalist>
                                    </div>
                                </div>
                                <p>Limpios y secos, sin restos de otros materiales.</p> 
                                <p>Por favor, no lleves vidrios rotos.</p>
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
    </div>
</div>
@endsection
