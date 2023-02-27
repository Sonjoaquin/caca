$cadena = <<<HEY
<html>
<h1>Perfil de <?php echo "Nombre de usuario";?></h1>
</html>
HEY;

$file = "data.txt";
file_put_contents($file, $cadena);

$gestor = fopen($file, "r");

while (!feof($gestor)){
    $buffer = fgetss($gestor, 4096);
    echo $buffer;
}
fclose($gestor);
// Devuelve: Perfil de
