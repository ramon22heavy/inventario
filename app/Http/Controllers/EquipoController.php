<?php

namespace App\Http\Controllers;

use App\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{

    public function index()
    {
        return Equipo::orderBy('id', 'desc')->paginate(20);
    }

    public function store(Request $request)
    {
        Equipo::create([

            'nombre' => $request['nombre'],
            'modelo' => $request['modelo'],
            'marca' => $request['marca'],
            'codigo' => $request['codigo'],
            'descripcion' => $request['descripcion'],
            'planta_id' => $request['planta_id'],
            'categoria_id' => $request['categoria_id']

        ]);

        return response()->json(['mensaje'=>'equipo registrado con exito'],201);
    }

    public function show($id)
    {
        $equipo = Equipo::find($id);

        if (is_null($equipo)) {
            return response()->json(['mensaje'=>'equipo no encontrado'],404);
        }

        $equipo->planta;
        $equipo->categoria;

        return response()->json(['equipo'=>$equipo],200);
    }

    public function update(Request $request, $id)
    {
         $equipo = Equipo::find($id);

        if (is_null($equipo)) {
            return response()->json(['mensaje'=>'equipo no encontrado'],404);
        }

            $equipo->update($request->all());
        return response()->json(['mensaje'=>'datos actualizados'],201);
    }


    public function destroy($id)
    {
         $equipo = Equipo::find($id);

        if (is_null($equipo)) {
            return response()->json(['mensaje'=>'equipo no encontrado'],404);
        }

            $equipo->delete();

        return response()->json(['mensaje'=>'datos eliminados '],200);
    }
}