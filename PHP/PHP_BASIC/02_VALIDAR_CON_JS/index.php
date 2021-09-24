<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/libraries/bootstrap.min.css">
    <link rel="stylesheet" href="../js/libraries/bootstrap.bundle.js">
    <script src="validar-datos.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>PHP | BASIC</title>
</head>
<body>
    <div class="container">
        <div class="form-group"><br>
            <div class="form-control">
                <hgroup><center><h1>Formulario de datos GET</h1></center></hgroup>
                <form name="valida_datos_get_frm"action="validar-datos.php" method="get" enctype="application/x-www-form-urlencode">
                    <label for="">Ingresar nombre:</label>
                    <input type="text" name="nombre_txt" class="form-control">
                    <label for="">Ingresar password</label>
                    <input type="password" name="" class="form-control">
                </form>
            </div><br>

            <div class="form-group">
                <div class="form-control">
                    <hgroup><center><h1>Formulario de datos POST</h1></center></hgroup>
                    <form action="valida_datos_post_frm" name="" method="post"></form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>