@extends('layout.app')
@section('content')
<link rel="stylesheet" href="/images">
<section class="banner"></section>
<body>
<div class="container mt-5" style="padding-top:80px">
                    <div class="row"> 
 <div class="col-md-12">
 <br>
 <div class="text-left">
 <a href="{{ route('fechas.create') }}" class="btn btn-info" >Añadir Fechas</a>
 </div>
 <br>
                        <table class="table text-center bg-white" >
                                <thead class="table-success table-striped" >
 <th>ID</th>
 <th>Fecha Encuentro</th>
 <th></th>
 <th>Local</th>
 <th>Goles</th>
 <th>Goles</th>
 <th></th>
 <th>Visitante</th>
 <th>Sede</th>
 <th colspan="2">Acciones</th>

 </thead>
 <tbody>

 @foreach($fecha as $fec)
 <tr>
 <td>{{$fec->idencuentro_paises}}</td>
 <td>{{$fec->fecha_encuentro_paises}}</td>
 <td><img src="{{asset('images').'/'.$fec->bandera_a}}"></td>
 <td>{{$fec->pais_nombre_a}}</td>
 <td>{{$fec->gol_a}}</td>
 <td>{{$fec->gol_b}}</td>
 <td><img src="{{asset('images').'/'.$fec->bandera_b}}"></td>
 <td>{{$fec->pais_nombre_b}}</td>
 <td>{{$fec->sede_nombre}}</td>


 <td><a class="btn btn-warning btn-xs" href="{{action('FechasController@edit', $fec->idencuentro_paises)}}" >Editar</a></td>
 <td>
 <form action="{{action('FechasController@destroy', $fec->idencuentro_paises)}}" method="post">
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