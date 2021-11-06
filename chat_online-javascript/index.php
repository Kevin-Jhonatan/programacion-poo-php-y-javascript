<?php
    include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <title>Chat | Online | PHP</title>
</head>
<script>
    function ajax(){
    var req = new XMLHttpRequest();
    req.onreadystatechange() = function(){
        if(req.readyState == 4 && req.status == 200){
            document.getElementById('chat').innerHTML = req.responseText;
        }
    }
    req.open('GET', 'chat.php', true);
        req.send();
    }

    //linea refresca la pagina automaticamente cada segundo
    setInterval(function(){ajax();}, 1000);
</script>
<body onload="ajax();">
    <div id="contenedor" class="">
        <div id="caja-chat" class="">
            <div id="chat">
                <?php
                    $consulta = "SELECT * FROM chat ORDER BY id DESC";
                    $ejecutar = $conexion->query($consulta);
                    while ($fila = $ejecutar->fetch_array()):
                ?>
                <div id="datos-chat">
                    <span style="color: #1c62c4;"><?php echo $fila['nombre'];?>:</span>
                    <span style="color: #848484;"><?php echo $fila['mensaje'];?></span>
                    <span style="float: right;"><?php echo formatearFecha($fila['fecha']);?></span>
                </div>
                <?php
                    endwhile;
                ?>
            </div>
        </div>
        <form action="index.php" method="POST" class="">
            <input type="text" name="nombre" placeholder="Ingresa tu nombre">
            <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Ingresa tu mensaje"></textarea>
            <input type="submit" name="enviar" value="enviar">
        </form>
        <?php
            if (isset($_POST['enviar'])){
                $nombre = $_POST['nombre'];
                $mensaje = $_POST['mensaje'];
                $consulta = "INSERT INTO chat (nombre, mensaje) VALUES ('$nombre', '$mensaje')";
                $ejecutar = $conexion->query($consulta);

                if($ejecutar){
                    echo "<embed loop='false' src='audio/a.mp3' hidden='true' autoplay='true'>";
                }
            }
        ?>
    </div>
</body>
</html>