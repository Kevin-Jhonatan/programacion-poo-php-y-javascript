<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/libraries/bootstrap.min.css">
    <link rel="stylesheet" href="js/libraries/bootstrap.bundle.js">
    <script src="js/script.js"></script>
    <title>PHP | POO</title>
</head>
<body>
    <!-- Add you custom twig html here -->
<!-- Servicio Tecnico Sin Garantia -->
<!DOCTYPE html>
{{ form.form_build_id }}

{{ form.form_token }}

{{ form.form_id }}

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<script>
    function sumar() {
        var total = 0;
        $(".form-control").each(function() {
          if (isNaN(parseFloat($(this).val()))) {
            total += 0;
          } else {
            total += parseFloat($(this).val());
          }
        });
        document.getElementById('total').innerHTML = total.toFixed(2);
    }
</script>
<div class="container">
    <div class="form-control">
        <div class="row">
              <div class="col">
                {{ form.propietario }}
              </div>

              <div class="col">
                {{ form.ci_nit }}
              </div>
        </div> 

        <div class="row">
            <div class="col">
                {{ form.sucursal }}
            </div>
            
            <div class="col">
                {{ form.fecha_ingreso }}
            </div>

            <div class="col">
                {{ form.nro_serie }}
            </div>
        </div>


        <div class="row">
            <div class="col">
                {{ form.celular}}
            </div>

            <div class="col">
                {{ form.marca }}
            </div>

            <div class="col">
                 {{ form.modelo }}
            </div>
        </div><br>

        <div class="row">
            <center><h3>Historial</h3></center>
            <div class="col">
                {{ form.observacion }}
            </div>
            <div class="col">
                {# test --> module (servicio tecnico sin garantía) #}
                {# {{ form.cambio }} #}
                <div class="form-control">
                    <div class="row">
                        <label class="label1">Cambio:</label>
                        <div class="col">
                            <input class="form-control"type="text" placeholder="Repuestos">
                        </div>
                        <div class="col">
                            <input class="form-control"type="number" placeholder="Bs"min="0" max="1000" onkeyup="sumar();"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input class="form-control"type="text" placeholder="Repuestos">
                        </div>
                        <div class="col">
                            <input class="form-control"type="number"placeholder="Bs"min="0" max="1000" onkeyup="sumar();" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input class="form-control"type="text" placeholder="Repuestos">
                        </div>
                        <div class="col">
                            <input class="form-control"type="number"placeholder="Bs"min="0" max="1000" onkeyup="sumar();" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input class="form-control"type="text" placeholder="Repuestos">
                        </div>
                        <div class="col">
                            <input class="form-control"type="number"placeholder="Bs"min="0" max="1000" onkeyup="sumar();" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input class="form-control"type="text" placeholder="Repuestos">
                        </div>
                        <div class="col">
                            <input class="form-control"type="number"placeholder="Bs"min="0" max="1000" onkeyup="sumar();" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <center class="form-control">
                                <label class="label3" style="font: oblique bold 120% cursive">Mano de obra</label>
                            </center>
                        </div>
                        <div class="col">
                            <input class="form-control"type="number" placeholder="Bs"min="0" max="1000" onkeyup="sumar();" />
                        </div>
                        <center>
                            <label class="label4" style="font: oblique bold 120% cursive">Total a pagar:</label> 
                            <h7 id="total" style="font: oblique bold 120% cursive">0.00</h7><h7 style="font: oblique bold 120% cursive"> Bs</h7>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col">
                {{ form.detalle}}
            </div>
        </div>

        <div class="form-group"><br>
            <center><h3>Estado de Servicio Técnico</h3></center>

            <div class="form-control">
               <div class="row">
                    <div class="col">
                        {{ form.fecha_salida }}
                    </div>
                    <div class="col">
                        {{ form.estado}}
                    </div>
                </div>
            </div>
        </div><br>

        <div class="row">
            <center>
                <div class="col">
                       {{ form.submit }}
                    <button class="btn btn-primary"btn btn-primary onclick="window.location.href='/servicios'">Cancelar</button>
                </div>
            </center>
        </div><br>

    </div>
</div>
</body>
</html>