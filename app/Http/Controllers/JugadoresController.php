<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\jugador;
class JugadoresController extends Controller
{
    /**
    * Muestra una lista de los jugadores.
    *
    * @return Response
    */
    public function index()
    {
    $jugador = jugador::get();
    return view('jugadores.index')->with('jugador', $jugador);
    }

    public function show()
    {
      // Devolverá todos los jugadores
      $jugador = jugador::orderBy('id_jugador', 'ASC')->get();
      return view('jugadores.crud')->with('jugador', $jugador);
    }
    
    public function destroy($id_jugador) 
    {
      jugador::destroy($id_jugador);
      return redirect('jugadores/show');
    }

    public function create()
    {
      return view('jugadores.create');
    }

    public function store(Request $request)
    {
      $jugador = new jugador;
      $jugador->id_jugador=$request->input('id_jugador');
      $jugador->nombre_jugador=$request->input('nombre_jugador');
      $jugador->pais_nombre=$request->input('pais_nombre');
      $jugador->edad=$request->input('edad');
      $jugador->save();  
      return redirect('jugadores/show');
    }

    public function edit($id_jugador)
  {
    $jugador= jugador::find($id_jugador);
    return view('jugadores.edit',compact('jugador'));
  }
  /////////////////////////////////////////////////////////
  public function update(Request $request, $id_jugador)
  {
      $jugador = jugador:: findOrFail($id_jugador);
      $jugador->nombre_jugador=$request->input('nombre_jugador');
      $jugador->pais_nombre=$request->input('pais_nombre');
      $jugador->edad=$request->input('edad');
      $jugador->save();  
      return redirect('jugadores/show');
  }
    
}