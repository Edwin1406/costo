<?php

namespace Controllers;

class InicioController
{
    public static function index()
    {
        $nombre = 'Javier';
        $apellido = 'Gonzalez';
        $titulo = 'Inicio';
        $datos = [
            'nombre' => $nombre,
            'apellido' => $apellido,
            'titulo' => $titulo
        ];
        echo json_encode($datos);
    }
}