<h1>Noes et moyenne eleve</h1>

<?php
echo "<b>Soit les notes suivantes de l'élève :<br>  10<br>  12<br>  08<br>  19<br>  03<br>  16<br>  11<br>  13<br>  19<br></b>";


$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$moyenne = array_sum($notes) / count($notes);

echo "<b>La moyenne de l'élève est de : " . round($moyenne, 2) . "</b>";





?>