<h1>Exercice3</h1>

<p>Cheanger le mot :"aujourd'hui" par "demain</p>

<?php
$phrase = "Notre formation DL commence aujourd'hui";
$nouvellePhrase = str_replace("aujourd'hui", "demain", $phrase);

echo "Ancienne phrase : $phrase<br>";
echo "Nouvelle phrase : $nouvellePhrase";
?>