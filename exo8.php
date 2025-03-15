<h1>Table de multiplication avec for</h1>

<?php
function table_multiplication($n)
{
    echo "Table de $n :<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$i x $n =" . ($i * $n) . "<br>";
    }
}
$nombre = 8;
table_multiplication($nombre);
?>

<h1>Autre methode avec while</h1>

<?php
function table_multiplication1($n1)
{
    echo "table de $n1 : <br>";
    $i = 1;
    while ($i <= 10) {
        echo "$i x $n1 = " . ($i * $n1) . "<br>";
        $i++;
    }
}
$nombre1 = 8;
table_multiplication1($nombre1);

?>