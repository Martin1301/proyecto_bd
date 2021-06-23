<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\encuentro_pais;

class FechasController extends Controller
{
    /**
    * Muestra una lista de los comercial.
    *
    * @return Response
    */
  public function index()
  {
    // Devolverá todos los comercial
    $fecha = encuentro_pais::get();
    return view('fechas.index')->with('fecha', $fecha);
  }

  public function show()
    {
      // Devolverá todos los comercial
    $fecha = encuentro_pais::orderBy('idencuentro_paises', 'ASC')->get();
    return view('fechas.crud')->with('fecha', $fecha);
    }
    
    public function destroy($idencuentro_paises) 
    {
      encuentro_pais::destroy($idencuentro_paises);
      return redirect('fechas/show');
    }

    public function create()
    {
      return view('fechas.create');
    }

    public function store(Request $request)
    {
      $fecha = new encuentro_pais;
      $fecha->idencuentro_paises=$request->input('idencuentro_paises');
      $fecha->fecha_encuentro_paises=$request->input('fecha_encuentro_paises');
      $fecha->bandera_a=$request->input('bandera_a');
      $fecha->pais_nombre_a=$request->input('pais_nombre_a');
      $fecha->gol_a=$request->input('gol_a');
      $fecha->bandera_b=$request->input('bandera_b');
      $fecha->pais_nombre_b=$request->input('pais_nombre_b');
      $fecha->gol_b=$request->input('gol_b');
      $fecha->sede_nombre=$request->input('sede_nombre');
      $fecha->save();  
      return redirect('fechas/show');
      
      if($request->hasFile('bandera_a')){
        $fecha['bandera_a']=$request->file('bandera_a')->store('uploads','public');
      }
      if($request->hasFile('bandera_b')){
        $fecha['bandera_b']=$request->file('bandera_b')->store('uploads','public');
      }
    }

    public function edit($idencuentro_paises)
  {
    $fecha= encuentro_pais::find($idencuentro_paises);
    return view('fechas.edit',compact('fecha'));
  }
  /////////////////////////////////////////////////////////
  public function update(Request $request, $idencuentro_paises)
  {
    $fecha = encuentro_pais:: findOrFail($idencuentro_paises);
    $fecha->fecha_encuentro_paises=$request->input('fecha_encuentro_paises');
    $fecha->bandera_a=$request->input('bandera_a');
    $fecha->pais_nombre_a=$request->input('pais_nombre_a');
    $fecha->gol_a=$request->input('gol_a');
    $fecha->bandera_b=$request->input('bandera_b');
    $fecha->pais_nombre_b=$request->input('pais_nombre_b');
    $fecha->gol_b=$request->input('gol_b');
    $fecha->sede_nombre=$request->input('sede_nombre');
    $fecha->save();
    return redirect('fechas/show');
  }
  
}