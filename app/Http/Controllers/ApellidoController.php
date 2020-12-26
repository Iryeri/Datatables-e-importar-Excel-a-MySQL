<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apellido;

class ApellidoController extends Controller
{
    //archivo


    public function archivo()
    {
        return view('nombres.apellidos');
    }



    public function importar()
    {
        $fileApellidos = $_FILES['fileApellidos'];
        $fileApellidos = file_get_contents($fileApellidos['tmp_name']);
        $fileApellidos = explode("\n", $fileApellidos);
        $fileApellidos = array_filter($fileApellidos);

        foreach($fileApellidos as $apellidos)
        {
            $apellidosList[] = explode(",", $apellidos);
        }

        print_r($apellidosList);
        exit;
    }
}
