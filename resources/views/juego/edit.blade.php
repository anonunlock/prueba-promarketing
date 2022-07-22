@extends('layouts.admin')
@section('main-content')
<div class="row">
    <div class="col-lg-12 order-lg-1">

        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Juego</h6>
            </div>

            <div class="card-body">

                <form method="POST" action="{{ route('juegos.update') }}" autocomplete="off">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="hidden" name="_method" value="POST">

                    <input type="hidden" id="id" name="id" value="{{$juego->id}}">

                    <h6 class="heading-small text-muted mb-4">Información del Juego</h6>

                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="name">Nombre del Juego <span class="small text-danger">*</span> </label>
                                    <input type="text" id="name" class="form-control" name="nombre" placeholder="nombre" value="{{$juego->nombre}}" required>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="url">Url Juego <span class="small text-danger">*</span> </label>
                                    <input type="text" id="url" class="form-control" name="url" placeholder="https://example.com/game" value="{{$juego->url }}" required>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="estatus">Estatus <span class="small text-danger">*</span> </label>
                                    <select id="estatus" class="form-control" name="estatus" value="{{$juego->estatus}}" required>
                                        <option value="1" {{ ( "1" == $juego->estatus) ? 'selected' : '' }}> {{ "Activo" }}
                                        <option value="0" {{ ( "0" == $juego->estatus) ? 'selected' : '' }}> {{ "Inactivo" }}
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="name">Url Imagen <span class="small text-danger">*</span> </label>
                                    <input type="text" id="url_imagen" class="form-control" name="url_imagen" placeholder="https://example.com/image.jpeg" value="{{$juego->url_imagen}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="descripcion">Descripción</label>
                                    <textarea class="form-control" name="descripcion" id="descripcion" rows="3" > {{$juego->descripcion}} </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

        </div>

    </div>

</div>
@endsection
