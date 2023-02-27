<!DOCTYPE html>
<html>
<head>
  <title>Control de asistencia</title>
</head>
<body>
  <h1> Control de asistencia</h1>
  
  <form method="post">
    Enter Your Text Here:<br>
    <input type="text" name="textdata"><br>
    Introduzca el número de sesión
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
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fwrite($fp, ";");
fwrite($fp, $fecha_actual);
fwrite ($fp, "\n");
fclose($fp);
}
?>
