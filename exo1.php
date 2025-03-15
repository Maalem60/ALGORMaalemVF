<h1>Exerecice1</h1>
<p>Soit la phrase " Notre formation DL commence aujourd'hui".<br>
    Ecrire un algorithme permettant de compter le nombre de caractères contenus.<br>
    dans cette phrase</p>

<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";

$longueur = strlen($phrase);

echo "<b>La phrase $phrase contient   $longueur   caractères</b><br><br>";

?>







<?php
$phrase = "Je suis complètement malade !";

$nblettres = strlen($phrase);

echo "la phrase $phrase contient  $nblettres  lettres avec les espaces et la ponctuation";
