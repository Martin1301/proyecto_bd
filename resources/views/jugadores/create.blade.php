@extends('layout.app')
@section('content')
<div class="container mt-5" style="padding-top:90px">
<div class="row">
                        <div class="col-md-4">
                            <form action="{{route('jugadores.store')}}" method="post">
                            @csrf
                            <div class="form-group ">
                                    <input style="color:#FF0000;" type="number" class="form-control mb-3 " name="id_jugador" placeholder="ID del jugador" required="required">
                                    </div>
                            <div class="form-group letrascrud">
                                    <input type="letter" class="form-control mb-3 " name="nombre_jugador" placeholder="Nombre del jugador" required="required">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3  " name="pais_nombre" placeholder="País del jugador" required="required">
                                    </div>
                            <div class="form-group">
                                    <input type="number" class="form-control mb-3  " name="edad" placeholder="Edad del jugador" required="required">
                                    </div>
                        
                            <div class="form-group">
                            <button type="submit" class="btn btn-primary mr-5">Guardar</button>
                            <input type="button" onclick="history.back()" value="Volver" class="btn btn-dark">
                        </div>
                        </div>
                        </div>
                        </div>
@endsection                          