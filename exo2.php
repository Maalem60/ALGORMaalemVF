<h1>Nombres de mots</h1>
<p>De la phrase suivante :<br>
Notre formation DL commence aujourd'hui</p>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$nbMots = str_word_count($phrase);
echo "La phrase contient $nbMots mots<br>";

?>