$cadena = <<<HEY
<html>
</html>
HEY;

$file = "data2.txt";
file_put_contents($file, $cadena);

$gestor = fopen($file, "r");

while (!feof($gestor)){
    $buffer = fgetss($gestor, 4096);
    echo $buffer;
}
fclose($gestor);
// Devuelve: Perfil de
