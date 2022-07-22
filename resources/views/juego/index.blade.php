@extends('layouts.admin')
@section('main-content')

<div class="row">
    <div class="col-lg-12 order-lg-1">

        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Juego</h6>
            </div>

            <div class="card-body">
                @if(session('state_messaje'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{session('state_messaje')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
                </div>
                @endif


                <a href="{{url("/juegos/create ")}}" class="btn btn-primary">
                     <i class="fas fa-plus-circle">&nbsp</i> Agregar Juego
                </a>
                <br>
                <br>
                <div class="separador"></div>

                <div class="table-responsive">
                    <table id="table-users" class="table table-bordered table-striped table-hover table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center" scope="col">#</th>
                                <th class="text-center" scope="col">Nombre</th>
                                <th class="text-center" scope="col">Url</th>
                                <th class="text-center" scope="col">Imagen</th>
                                <th class="text-center" scope="col">Status</th>
                                <th class="text-center" scope="col">Opciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $count = 1; ?> @foreach($data as $row)
                            <tr>
                                <td class="text-center">{{$count++}}</td>
                                <td class="text-center">{{$row->nombre}} </td>
                                <td class="text-center"> <a href="{{$row->url}}" target="_blank"> {{$row->url}} </td>
                                <td class="text-center"><img src="{{$row->url_imagen}}" class="img-thumbnail rounded" width="150" height="75">   </td>
                                <td class="text-center">
                                    @if ($row->estatus == 1)
                                        <a href="" class="badge badge-success"> Activo </a>
                                    @endif
                                    @if ($row->estatus == 0)
                                        <a href="" class="badge badge-danger"> Inactivo </a>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{url("/juegos/show/".$row->id)}}"><i class="fas fa-eye"> &nbsp; </i> </a>
                                    <a href="{{url("/juegos/edit/".$row->id)}}"><i class="fas fa-edit"> &nbsp; </i> </a>
                                    <a href="{{url("/juegos/delete/".$row->id)}}"><i class="fas fa-trash-alt"> &nbsp; </i> </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
