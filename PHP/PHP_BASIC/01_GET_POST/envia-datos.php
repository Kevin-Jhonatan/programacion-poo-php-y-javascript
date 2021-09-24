<?php
    // 
    if(isset($_GET['enviar_btn'])){
        echo "El metodo GET se esta ejecutando y te devuelve el link
        que se ve en el navegador <br> El nombre es: " . $_GET['nombre_txt'] . "<br> El password es : "
        . $_GET['password_txt'];
    }else if(isset($_POST['enviar_btn'])){
        echo "El metodo POST se esta ejecutando y no te devuelve nada en el link a comparacion
        del metodo GET que te describe lo que esta ocurriendo <br> El nombre es : " . $_POST['nombre_txt'] 
        . "<br>El password es : " . $_POST['password_txt'];
    }
?>