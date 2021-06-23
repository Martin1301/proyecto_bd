@extends('layout.app')
@section('content')
<div class="container mt-5" style="padding-top:90px">
<div class="row">
                        <div class="col-md-4">
	 	 	<form method="POST" action="{{ route('posiciones.update', $posiciones->id_posicion) }}" role="form">
	 	 	{{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH">
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="pais_nombre" placeholder="País" value="{{$posiciones->pais_nombre}}">
                            </di>
                            <div class="form-group">
                                    <input type="number" class="form-control mb-3" name="ganado" placeholder="Partidos Ganados" value="{{$posiciones->ganado}}">   
                          </div>
                            <div class="form-group">
                                    <input type="number" class="form-control mb-3" name="perdido" placeholder="Partidos Perdidos" value="{{$posiciones->perdido}}">
                            </div>
                            <div class="form-group">
                                    <input type="number" class="form-control mb-3" name="empatado" placeholder="Partidos Empatados" value="{{$posiciones->empatado}}">
                            </div>
                            <div class="form-group">
                                    <input type="number" class="form-control mb-3" name="puntos" placeholder="Puntos" value="{{$posiciones->puntos}}">
                        </div>
                            <div class="text-right">
    <button type="submit" class="btn btn-primary">Guardar datos</button>
    <button type="reset" class="btn btn-danger" value="cancelar">Cancelar</button>
    <input type="button" onclick="history.back()" value="Volver" class="btn btn-light">
    </div>
                        </div>
                        </div>
                        
@endsection
