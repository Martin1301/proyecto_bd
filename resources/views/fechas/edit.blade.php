@extends('layout.app')
@section('content')

<div class="container mt-5" style="padding-top:90px">
<div class="row">
                        <div class="col-md-4">
<form method="POST" action="{{ route('fechas.update', $fecha->idencuentro_paises) }}" role="form">
	 	 	{{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH">
                            <div class="form-group">
                                    <input type="date" class="form-control mb-3" name="fecha_encuentro_paises" value="{{$fecha->fecha_encuentro_paises}}">
                            </div>
                            <div class="form-group">
                                    <input type="file" class="form-control mb-3" name="bandera_a" value="{{$fecha->bandera_a}}">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="pais_nombre_a" value="{{$fecha->pais_nombre_a}}">
                            </div>
                            <div class="form-group">
                                    <input type="number" class="form-control mb-3" name="gol_a" value="{{$fecha->gol_a}}">   
                            </div>
                            <div class="form-group">
                                    <input type="file" class="form-control mb-3" name="bandera_b" value="{{$fecha->bandera_b}}">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="pais_nombre_b" value="{{$fecha->pais_nombre_b}}">   
                            </div>
                            <div class="form-group">
                                    <input type="number" class="form-control mb-3" name="gol_b" value="{{$fecha->gol_b}}">   
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="sede_nombre" value="{{$fecha->sede_nombre}}">   
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
