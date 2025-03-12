<h1>Phrase palindrome</h1>

<p>D'abord, éliminer tous les problèmes d'inversion : <br>
    - Les majuscules<br>
    - Les espaces<br>
    - Les caractères spéciaux<br>
    Afin de que l'ordi reconnaisse la phrase comme palindrome
</p>
<p>Ensuite, on peut comparer la phrase</p>

<?php

function estPalindrome($phrase)
{
    // La phrase est convertie en minuscules (strtolower)
    $phrase = mb_strtolower($phrase);
    // On supprime les espaces et la ponctuation
    $phrase = preg_replace("/[^a-z0-9]/u", "", $phrase);
    // on verifie si la phrase est identique inversée avec l'égalité ===
    return $phrase === strrev($phrase);
}
$phrase = "engage le jeu que je le gagne";
// vérification des conditions d'égalité
if (estPalindrome($phrase)) {
    echo "La phrase ($phrase) est palindrome.";
} else {
    echo "La phrase($phrase) n'est pas palindrome.";
}



?>