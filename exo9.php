<h1>Imposable ou pas ?</h1>

<?php
$age = 27;
$sexe = "F";



if (($sexe == "F" && $age > 18 && $age < 35) || ($sexe == "H" && $age > 20)) {
    echo "Vous êtes imposable";
} else {
    echo "Vous n'êtes pas imposable";
}
