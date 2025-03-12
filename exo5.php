<h1>Conversion Francs en Euros</h1>
<?php

function ConversionFrancsEuros($montantFrancs)
{
    // le taux de conversion est à 6 5597
    $tauxConversion = 6.5597;
    $montantEuros = $montantFrancs / $tauxConversion;
    // on arrondi à  décimales ;-)
    $montantEuros = number_format($montantEuros, 2);

    echo ("Pour " . $montantFrancs . " Francs Le montant en Euros est = " . $montantEuros . " €");
}
ConversionFrancsEuros(100);
?>