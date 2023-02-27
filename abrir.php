<!DOCTYPE html>
<html lang="es">
<head>
  <title>Control de asistencia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-3">
    </div>
    <div class="col-6 pt-5">
      <h1> Control de asistencia Registro de inicio</h1>
      <div class="mt-5">
        <form method="post">
          <div class="form-floating mb-3">
            <input type="text" id="textdata" name="textdata" class="form-control" placeholder="Tu Nombre"> 
            <label for="textdata">Escriba su nombre completo:</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" id="sesion" name="sesion" class="form-control" placeholder="Sesion">
            <label for="sesion">Introduzca el número de sesión:</label>
          </div>
          <div class="text-center">
            <button type="submit" name="submit" class="btn btn-primary"> Enviar </button>
          </div>
          <h2 class="pt-5"> El navegador le preguntará si quiere abrir ventana emergente</h2>
        </form>
      </div>
    </div>
    <div class="col-3">
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
<?php
$fecha_actual = date("d-m-Y h:i:s");
if (isset($_POST['textdata'], $_POST['sesion'])) {
  $data=$_POST["textdata"];
  $data2=$_POST['sesion'];
  escritura("data.txt", $data, $data2);
}

function escritura($archivo, $data, $data2)
{
  $f = fopen($archivo, "a");
  $fecha = new DateTime('now', new DateTimeZone("Europe/Madrid"));
  $data= "\xEF\xBB\xBF".$data." ".$fecha->format('d-m-Y H:i:s')." ".$data2."\n"; // utf8 bom
  fputs($f, $data);
  fclose($f);
}
echo '<script type="text/javascript">
    window.open("https://controlcursociber.azurewebsites.net/cerrar.php");
</script>';
exit();?>
