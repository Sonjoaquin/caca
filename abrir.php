<!DOCTYPE html>
<html>
<head>
  <title>Control de asistencia</title>
</head>
<body>
  <h1> Control de asistencia Registro de inicio</h1>
  
  <form method="post">
    Escriba su nombre compleo:<br>
    <input type="text" name="textdata"><br>
    Introduzca el número de sesión:<br>
    <input type="text" name="sesion"><br>
    <input type="submit" name="submit">
    
  </form>
</body>
</html>
<?php
$fecha_actual = date("d-m-Y h:i:s");
if(isset($_POST['textdata']))
{
$data=$_POST['textdata'];
$data2=$_POST['sesion'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fwrite($fp, ";");
fwrite($fp, $fecha_actual);
fwrite($fp, ";");
fwrite($fp, $data2);
fwrite ($fp, "\n");
fclose($fp);
}
?>
