@extends('layout.app')
@section('content')
<div class="container mt-5" style="padding-top:90px">
<div class="row">
                        <div class="col-md-4">
                            <form action="{{route('posiciones.store')}}" method="post">
                            @csrf
                            <div class="form-group ">
                                    <input type="text" class="form-control mb-3 " name="id_posicion" placeholder="ID" required="required">
                                    </div>
                            <div class="form-group ">
                                    <input type="text" class="form-control mb-3 " name="pais_nombre" placeholder="País" required="required">
                                    </div>
                            <div class="form-group">
                                    <input type="number" class="form-control mb-3  " name="ganado" placeholder="Partidos Ganados" required="required">
                                    </div>
                            <div class="form-group">                        
                                    <input type="number" class="form-control mb-3  " name="perdido" placeholder="Partidos Perdidos" required="required">
                                    </div>
                           <div class="form-group">                        
                                    <input type="number" class="form-control mb-3  " name="empatado" placeholder="Partido Empatado" required="required">
                           </div>
                           <div class="form-group">                        
                                    <input type="number" class="form-control mb-3  " name="puntos" placeholder="Puntos" required="required">
                           </div>
                            <div class="form-group">

                            <button type="submit" class="btn btn-primary mr-5">Guardar</button>
                            <input type="button" onclick="history.back()" value="Volver" class="btn btn-dark">
                        </div>
                        </div>
                        </div>
                        </div>
@endsection     