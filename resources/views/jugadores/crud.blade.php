@extends('layout.app')
@section('content')
<section class="banner"></section>
<body>
<div class="container mt-5" style="padding-top:80px">
                    <div class="row"> 
 <div class="col-md-12">
 <br>
 <div class="text-left">
 <a href="{{ route('jugadores.create') }}" class="btn btn-info" >Registrar Jugador</a>
 </div>
 <br>
                        <table class="table text-center bg-white" >
                                <thead class="table-success table-striped" >
 <th>ID</th>
 <th>Nombre</th>
 <th>País</th>
 <th>Edad</th>
 <th colspan="2">Acciones</th>

 </thead>
 <tbody>

 @foreach($jugador as $juega)
 <tr>
 <td>{{$juega->id_jugador}}</td>
 <td>{{$juega->nombre_jugador}}</td>
 <td>{{$juega->pais_nombre}}</td>
 <td>{{$juega->edad}}</td>

 <td><a class="btn btn-warning btn-xs" href="{{action('JugadoresController@edit', $juega->id_jugador)}}" >Editar</a></td>
 <td>
 <form action="{{action('JugadoresController@destroy', $juega->id_jugador)}}" method="post">
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