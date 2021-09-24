<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/libraries/bootstrap.min.css">
    <link rel="stylesheet" href="../js/libraries/bootstrap.bundle.js">
    <script src="../js/script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>PHP | BASIC</title>
</head>
<body>
    <!-- 
    Como buena práctica siempre se debe mantener una buena documentación.
    Cuando se quiera tener 2 encabezados se crea con SEO que nos dice que 
    no puede ver mas de 1 encabezado en caso se requira tener 2 o mas encabezados 
    se debe usar <hgroup><h1>Mi primer y segundo encabezado</h1></hgroup>
    -->
    <div class="container">
        <div class="form-group"><br>
            <div class="form-control">
                <hgroup><center><h1>Formulario enviado por el metodo GET</h1></center></hgroup>
                <!--
                Para la parte del formulario action indica donde se enviaran los datos,
                tambien usaremos el metodo get para obtener datos y se refleje en la URL,
                como texto plano txt el cual se usa con la etiqueta enctype=""
                -->
                <form name="envia-get_frm" action="envia-datos.php" method="get" enctype="application/x-www-form-urlencoded">
                    <label for="" name="">Ingresar nombre:</label>
                    <input class="form-control"type="text" name="nombre_txt" placeholder="Ingresar nombre">
                    <label for="">Ingresar password:</label>
                    <input type="password" class="form-control" name="password_txt" placeholder="Ingresar contraseña">
                    <center><br><input class="btn btn-primary"type="submit" name="enviar_btn" value="Envia_GET"></center>
                </form>
            </div><br>
        </div>
        <div class="form-group">
            <div class="form-control">
                <hgroup><center><h1>Formulario enviado por el metodo POST</h1></center></hgroup>
                <form name="envia-post_frm" action="envia-datos.php" method="post">
                    <label for="">Ingresar nombre:</label>
                    <input type="text" class="form-control" name="nombre_txt" placeholder="Ingresar nombre">
                    <label for="">Ingresar password:</label>
                    <input type="password" class="form-control" name="password_txt" placeholder="Ingresar contraseña">
                    <center><br><input type="submit" name="enviar_btn" class="btn btn-primary" value="Envia_POST"></center>
                </form>
            </div>
        </div>
    </div>
</body>
</html>