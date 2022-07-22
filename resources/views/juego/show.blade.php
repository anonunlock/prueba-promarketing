@extends('layouts.admin')
@section('main-content')
<div class="row">
    <div class="col-lg-12 order-lg-1">

        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Ver Juego</h6>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-center font-weight-bold">{{$juego->nombre}}</h1>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{$juego->url_imagen}}" class="img-fluid" alt="Imagen del Juego" width="700" height="300">
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center">
                            <h4 class="m-0 font-weight-bold ">Información del Juego
                        </div>
                        <br>
                        <h6 class="m-0 font-weight-bold ">Estado:
                            @if ($juego->estatus == 1)
                                <a href="" class="badge badge-success"> Activo </a>
                            @endif
                            @if ($juego->estatus == 0)
                                <a href="" class="badge badge-danger"> Inactivo </a>
                            @endif
                        </h6>
                        <br>
                        <h6 class="m-0 font-weight-bold ">URL: <a href="{{$juego->url}}" > {{$juego->url}}</a></h6>
                        <br>
                        <h6 class="m-0 font-weight-bold ">Descripcion: {{$juego->descripcion}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
