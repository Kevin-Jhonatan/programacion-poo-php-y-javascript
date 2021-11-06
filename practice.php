<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice | PHP</title>
</head>
<body>
    <h1>Hello world</h1>
    <div class="container">
        <div class="form-control">
            <form action="" method="post">
                <div class="row">
                    <div class="col">
                        <input type="number" name="n1" placeholder="Ingrese 1er numero">
                        <input type="number" name="n2" placeholder="Ingrese 2do numero">
                        <input type="submit" value="Sumar"name="suma">
                        <input type="submit" value="Restar"name="rest">
                        <input type="submit" value="Multiplicar"name="mult">
                        <input type="submit" value="Dividir"name="div">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
        if (isset($_POST['suma'])) {
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $resultado = $n1 + $n2;
            print ("<h1>La suma es: ".$resultado."</h1>");
        }
        if (isset($_POST['rest'])) {
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $resultado = $n1 - $n2;
            print ("<h1>La resta es: ".$resultado."</h1>");
        }
        if (isset($_POST['mult'])) {
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $resultado = $n1 * $n2;
            print ("<h1>La multiplicación es: ".$resultado."</h1>");
        }
        if (isset($_POST['div'])) {
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $resultado = $n1 / $n2;
            print ("<h1>La división es: ".$resultado."</h1>");
        }
    ?>
</body>
</html>