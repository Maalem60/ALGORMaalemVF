<h1>Age de l'Enfant<h1>

        <?php


        $age = 8;
        if (gettype($age) == "double" || (gettype($age) == "integer")) {
            if ($age < 7) {
                echo "c'est un poussin";
            } elseif ($age < 9) {
                echo "c'est un Pupille";
            } elseif ($age < 11) {
                echo "c'est un Minime";
            } elseif ($age <= 12) {
                echo "C'est un cadet";
            } else {
                echo "cette catégorie n'est pas gérée";
            }
        } else {
            echo "Veuillez saisir un age numérique";
        }
