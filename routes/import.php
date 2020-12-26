<?php


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
?>