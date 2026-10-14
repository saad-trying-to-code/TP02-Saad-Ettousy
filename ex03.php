<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercice 3 — Constantes et calculs</title>
</head>
<body>
    <h1>Exercice 3 — Facture</h1>
    <?php
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");

    $prixUnitaireHT = 60;
    $quantite = 3;
    $totalHT = $prixUnitaireHT * $quantite;
    $montantTVA = $totalHT * TAUX_TVA / 100;
    $totalTTC = $totalHT + $montantTVA;
    $totalTTC += 15;
    ?>
    <ul>
        <li>Prix unitaire HT : <?php echo $prixUnitaireHT . " " . DEVISE; ?></li>
        <li>Quantité : <?php echo $quantite; ?></li>
        <li>Total HT : <?php echo $totalHT . " " . DEVISE; ?></li>
        <li>TVA (<?php echo TAUX_TVA; ?> %) : <?php echo $montantTVA . " " . DEVISE; ?></li>
        <li>Total TTC avant livraison : <?php echo ($totalHT + $montantTVA) . " " . DEVISE; ?></li>
        <li>Livraison : 15 <?php echo DEVISE; ?></li>
        <li>Montant final : <?php echo $totalTTC . " " . DEVISE; ?></li>
    </ul>
    <p>La constante TAUX_TVA est définie :
        <?php
        if (defined("TAUX_TVA")) {
            echo "oui";
        } else {
            echo "non";
        }
        ?>.
    </p>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
