<h1>Calcul du montant de la facture</h1>

<?php
// Déclaration des variables
$prixUnitaire = 9.99;  // Prix unitaire en euros
$quantite = 5;         // Quantité d'articles
$tva = 0.2;           // Taux de TVA (20% = 0.2)

// Calcul du montant total avec TVA
$montantFacture = ($prixUnitaire * $quantite) * (1 + $tva);

// Affichage des résultats
echo "Prix unitaire de l’article : " . number_format($prixUnitaire, 2) . " €<br>";
echo "Quantité : " . $quantite . "<br>";
echo "Taux de TVA : " . ($tva * 100) . " %<br>";
echo "Le montant de la facture à régler est de : " . number_format($montantFacture, 2) . " €";


?>






