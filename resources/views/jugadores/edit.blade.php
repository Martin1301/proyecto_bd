@extends('layout.app')
@section('content')

<div class="container mt-5" style="padding-top:90px">
<div class="row">
                        <div class="col-md-4">
<form method="POST" action="{{ route('jugadores.update', $jugador->id_jugador) }}" role="form">
	 	 	{{ csrf_field() }}
                          <input name="_method" type="hidden" value="PATCH">
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="nombre_jugador" value="{{$jugador->nombre_jugador}}">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="pais_nombre" value="{{$jugador->pais_nombre}}">
                            </div>
                            <div class="form-group">
                                    <input type="number" class="form-control mb-3" name="edad" value="{{$jugador->edad}}">   
                            </div>
                            <div class="text-right">
                            <button type="submit" class="btn btn-primary ">Guardar</button>
    <button type="reset" class="btn btn-danger" value="cancelar">Cancelar</button>
    <input type="button" onclick="history.back()" value="Volver" class="btn btn-light">
    </div>
                        </div>
                        </div>
                        </div>
                        

@endsection
