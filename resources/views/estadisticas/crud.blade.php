@extends('layout.app')
@section('content')
<section class="banner"></section>
<body>
<div class="container mt-5" style="padding-top:80px">
                    <div class="row"> 
 <div class="col-md-12">
 <br>
 <div class="text-left">
 <a href="{{ route('estadisticas.create') }}" class="btn btn-info" >Registrar Estadística</a>
 </div>
 <br>
                        <table class="table text-center bg-white" >
                                <thead class="table-success table-striped" >
 <th>ID</th>
 <th>País</th>
 <th>Nombre</th>
 <th>Amarilla</th>
 <th>Roja</th>
 <th colspan="2">Acciones</th>

 </thead>
 <tbody>

 @foreach($estadisticas as $estadistica)
 <tr>
 <td>{{$estadistica->id_estadisticas}}</td>
 <td>{{$estadistica->pais_nombre}}</td>
 <td>{{$estadistica->jugador_nombre_jugador}}</td>
 <td>{{$estadistica->amarilla}}</td>
 <td>{{$estadistica->roja}}</td>

 <td><a class="btn btn-warning btn-xs" href="{{action('EstadisticasController@edit', $estadistica->id_estadisticas)}}" >Editar</a></td>
 <td>
 <form action="{{action('EstadisticasController@destroy', $estadistica->id_estadisticas)}}" method="post">
 @csrf
 {{ method_field('DELETE')}}
 <input  class="btn btn-danger btn-xs" type="submit" value="Borrar">
 </form>
 </td>
 </tr>
 @endforeach


 </tbody>
 </table>
 </div>
 </div>

 </div>
 </div>

    </body>
@endsection