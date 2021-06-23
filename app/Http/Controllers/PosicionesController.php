<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\posicion;
class PosicionesController extends Controller
{
    /**
    * Muestra una lista de los posiciones.
    *
    * @return Response
    */
    public function index()
    {
      $posiciones = posicion::orderBy('puntos', 'DESC')->get();
      return view('posiciones.index')->with('posiciones', $posiciones);
    }
    public function store(Request $request)
  {
    $posiciones = new posicion;
    $posiciones->id_posicion=$request->input('id_posicion');
    $posiciones->pais_nombre=$request->input('pais_nombre');
    $posiciones->ganado=$request->input('ganado');
    $posiciones->perdido=$request->input('perdido');
    $posiciones->empatado=$request->input('empatado');
    $posiciones->puntos=$request->input('puntos');
    $posiciones->save();
    
    return redirect('posiciones/show');
  }
  /////////////////////////////////////////////////////////
  public function create()
  {
    return view('posiciones.create');
  }
  /////////////////////////////////////////////////////////
  public function show()
    {
      // Devolverá todos los jugadores
      $posiciones = posicion::orderBy('puntos', 'DESC')->get();
      return view('posiciones.crud')->with('posiciones', $posiciones);
    }
  /////////////////////////////////////////////////////////
  public function edit($id_posicion)
  {
    $posiciones=posicion::find($id_posicion);
    return view('posiciones.edit',compact('posiciones'));
  }
  /////////////////////////////////////////////////////////
  public function update(Request $request, $id_posicion)
  {
      $posiciones = posicion:: findOrFail($id_posicion);
      $posiciones->pais_nombre=$request->input('pais_nombre');
      $posiciones->ganado=$request->input('ganado');
      $posiciones->perdido=$request->input('perdido');
      $posiciones->empatado=$request->input('empatado');
      $posiciones->puntos=$request->input('puntos');
      $posiciones->save();  
      return redirect('posiciones/show');
  }
  /////////////////////////////////////////////////////////
  public function destroy($id_posicion) 
  {
    posicion::destroy($id_posicion);
      return redirect('posiciones/show');
  }

}
