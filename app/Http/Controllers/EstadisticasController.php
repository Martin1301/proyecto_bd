<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\estadisticas;
class EstadisticasController extends Controller
{
    /**
    * Muestra una lista de los comercial.
    *
    * @return Response
    */
  public function index()
  {
    $estadisticas = estadisticas::get();
    return view('estadisticas.index')->with('estadisticas', $estadisticas);
  }

  public function show()
  {
    // Devolverá todos los comercial
  $estadisticas = estadisticas::orderBy('id_estadisticas', 'ASC')->get();
  return view('estadisticas.crud')->with('estadisticas', $estadisticas);
  }
  
  public function destroy($id_estadisticas) 
  {
    estadisticas::destroy($id_estadisticas);
    return redirect('estadisticas/show');
  }

  public function create()
  {
    return view('estadisticas.create');
  }

  public function store(Request $request)
  {
    $estadisticas = new estadisticas;
    $estadisticas->id_estadisticas=$request->input('id_estadisticas');
    $estadisticas->pais_nombre=$request->input('pais_nombre');
    $estadisticas->jugador_nombre_jugador=$request->input('jugador_nombre_jugador');
    $estadisticas->amarilla=$request->input('amarilla');
    $estadisticas->roja=$request->input('roja');
    $estadisticas->save();  
    return redirect('estadisticas/show');
  }

  public function edit($id_estadisticas)
  {
    $estadisticas= estadisticas::findOrFail($id_estadisticas);
    return view('estadisticas.edit',compact('estadisticas'));
  }
/////////////////////////////////////////////////////////
public function update(Request $request, $id_estadisticas)
{
    $estadisticas = estadisticas:: findOrFail($id_estadisticas);
    $estadisticas->pais_nombre=$request->input('pais_nombre');
    $estadisticas->jugador_nombre_jugador=$request->input('jugador_nombre_jugador');
    $estadisticas->amarilla=$request->input('amarilla');
    $estadisticas->roja=$request->input('roja');
    $estadisticas->save();  
    return redirect('estadisticas/show');
}
}