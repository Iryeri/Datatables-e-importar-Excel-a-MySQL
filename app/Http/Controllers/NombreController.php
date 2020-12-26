<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nombre;

class NombreController extends Controller
{
   //LISTAR
   public function index()
   {
      $nombres = Nombre::all();
      return view('nombres.index',compact('nombres'));
   }


   public function store(Request $request)
   {
       $nombre = new Nombre;

       $nombre->nombre = $request->input('nombre');        
       $nombre->apellido1 = $request->input('apellido1');
       $nombre->apellido2 = $request->input('apellido2');
       $nombre->papa = $request->input('papa');
       $nombre->mama = $request->input('mama');
       $nombre->hermano = $request->input('hermano');
       $nombre->amigo = $request->input('amigo');
       $nombre->amiga = $request->input('amiga');       
       $nombre->save();
   }


   public function update(Request $request, $id)
   {
       $nombre = Nombre::find($id);

       $nombre->nombre = $request->input('nombre1');        
       $nombre->apellido1 = $request->input('apellido11');
       $nombre->apellido2 = $request->input('apellido21');
       $nombre->papa = $request->input('papa1');
       $nombre->mama = $request->input('mama1');
       $nombre->hermano = $request->input('hermano1');
       $nombre->amigo = $request->input('amigo1');
       $nombre->amiga = $request->input('amiga1');
       $nombre->save();
   }


   public function delete($id)
   {
       $nombre = Nombre::find($id);
       $nombre->delete();
       return $nombre;
   }









   public function editar($id)
   {
       return 5;
   }




}
