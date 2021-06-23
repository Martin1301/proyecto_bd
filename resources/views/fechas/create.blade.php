@extends('layout.app')

@section('content')

                        
<div class="container mt-5" style="padding-top:90px">
<div class="row">
                        <div class="col-md-4">
                            <form action="{{route('fechas.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                    <input type="number" class="form-control mb-3" name="idencuentro_paises" placeholder="ID" required="">
                            </div>
                            <div class="form-group">
                                    <input type="date" class="form-control mb-3" name="fecha_encuentro_paises" placeholder="Fecha Encuentro" required="">
                            </div>
                            <div class="form-group">
                                    <input type="file" class="form-control mb-3" name="bandera_a"  required="">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="pais_nombre_a" placeholder="Local" required="">
                            </div>
                            <div class="form-group">
                                    <input type="number" class="form-control mb-3" name="gol_a" placeholder="Goles" required="">
                            </div>
                            <div class="form-group">
                                    <input type="file" class="form-control mb-3" name="bandera_b"  required="">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="pais_nombre_b" placeholder="Visitante" required="">
                            </div>
                            <div class="form-group">
                                    <input type="number" class="form-control mb-3" name="gol_b" placeholder="Goles" required="">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="sede_nombre" placeholder="Sede" required="">
                            </div>
                            <button type="submit" class="btn btn-primary mr-5">Guardar</button>
                            <input type="button" onclick="history.back()" value="Volver" class="btn btn-dark">
                            </div>
                        </div>
                        </div>
                        </div>

@endsection
