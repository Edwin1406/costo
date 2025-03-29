<?php

namespace Controllers;

class InicioController
{
    public static function index()
    {
        $datos = [
            'titulo' => 'Inicio',
            'nombre' => 'Javier',
            'apellido' => 'Gonzalez'
        ];
        echo json_encode($datos);
    }
}