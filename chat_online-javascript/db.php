<?php
    $server = 'localhost';
    $user = 'kevin';
    $password = 'drupal';
    $db_name = 'chat_online';

    $conexion = new mysqli($server, $user, $password, $db_name);
    function formatearFecha($fecha){
        return date('g:i a', strtotime($fecha));
    }
?>