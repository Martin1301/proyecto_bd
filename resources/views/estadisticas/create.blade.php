@extends('layout.app')
@section('content')
<div class="container mt-5" style="padding-top:90px">
<div class="row">
                        <div class="col-md-4">
                            <form action="{{route('estadisticas.store')}}" method="post">
                            @csrf
                            <div class="form-group ">
                                    <input type="number" class="form-control mb-3 " name="id_estadisticas" placeholder="ID Estadistica" required="required">
                                    </div>
                            <div class="form-group letrascrud">
                                    <input type="text" class="form-control mb-3 " name="pais_nombre" placeholder="País del jugador" required="required">
                            </div>
                            <div class="form-group">
                        
                                    <input type="text" class="form-control mb-3  " name="jugador_nombre_jugador" placeholder="Nombre del jugador" required="required">
                                    </div>
                            <div class="form-group">                        
                                    <input type="number" class="form-control mb-3  " name="amarilla" placeholder="Tarjetas amarillas" required="required">
                                    </div>
                           <div class="form-group">                        
                                    <input type="number" class="form-control mb-3  " name="roja" placeholder="Tarjetas rojas" required="required">
                           </div>
                            <div class="form-group">
                            
                        
                        
                            <button type="submit" class="btn btn-primary mr-5">Guardar</button>
                            <input type="button" onclick="history.back()" value="Volver" class="btn btn-dark">
                        </div>
                        </div>
                        </div>
                        </div>
@endsection     