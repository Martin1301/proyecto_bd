@extends('layout.app')
@section('content')
<section class="banner"></section>
<body>
<div class="container mt-5" style="padding-top:80px">
                    <div class="row"> 
 <div class="col-md-12">
 <br>
 <div class="text-left">
 <a href="{{ route('posiciones.create') }}" class="btn btn-info" >Registrar posicion</a>
 </div>
 <br>
                        <table class="table text-center bg-white" >
                                <thead class="table-success table-striped" >
 <th>Id</th>
 <th>País</th>
 <th>Ganado</th>
 <th>Perdido</th>
 <th>Empatado</th>
 <th>Puntos</th>
 <th colspan="2">Acciones</th>

 </thead>
 <tbody>
 <tr>
 @foreach($posiciones as $puesto)
 <tr>
 <td>{{$puesto->id_posicion}}</td>
 <td>{{$puesto->pais_nombre}}</td>
 <td>{{$puesto->ganado}}</td>
 <td>{{$puesto->perdido}}</td>
 <td>{{$puesto->empatado}}</td>
 <td>{{$puesto->puntos}}</td>

 <td><a class="btn btn-warning btn-xs" href="{{action('PosicionesController@edit', $puesto->id_posicion)}}" >Editar</a></td>
 <td>
 <form action="{{action('PosicionesController@destroy', $puesto->id_posicion)}}" method="post">
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