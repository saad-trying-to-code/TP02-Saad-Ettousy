<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercice 4 — Types PHP</title>
</head>
<body>
    <h1>Exercice 4 — Types et conversions</h1>
    <?php
    $entier = 42;
    $chaine = "42";
    $flottant = 15.8;
    $vrai = true;
    $faux = false;
    $valeurNulle = null;

    $chaineEnEntier = (int) $chaine;
    $flottantEnEntier = (int) $flottant;
    $entierEnChaine = (string) $entier;

    $zeroEnBooleen = (bool) 0;
    $chaineZeroEnBooleen = (bool) "0";
    $phpEnBooleen = (bool) "PHP";
    $tableauVideEnBooleen = (bool) [];
    ?>

    <h2>Valeurs et types initiaux</h2>
    <pre>
Entier : <?php var_dump($entier); ?>
Chaîne de caractères : <?php var_dump($chaine); ?>
Nombre décimal : <?php var_dump($flottant); ?>
Vrai : <?php var_dump($vrai); ?>
Faux : <?php var_dump($faux); ?>
Valeur nulle : <?php var_dump($valeurNulle); ?>
    </pre>

    <h2>Conversions</h2>
    <pre>
"42" converti en entier : <?php var_dump($chaineEnEntier); ?>
15.8 converti en entier : <?php var_dump($flottantEnEntier); ?>
42 converti en chaîne : <?php var_dump($entierEnChaine); ?>
    </pre>

    <h2>Affichage des booléens</h2>
    <p>Avec echo, true affiche : [<?php echo $vrai; ?>]</p>
    <p>Avec echo, false affiche : [<?php echo $faux; ?>]</p>
    <pre>
Avec var_dump, true : <?php var_dump($vrai); ?>
Avec var_dump, false : <?php var_dump($faux); ?>
    </pre>

    <h2>Conversions en booléen</h2>
    <pre>
0 converti en booléen : <?php var_dump($zeroEnBooleen); ?>
"0" converti en booléen : <?php var_dump($chaineZeroEnBooleen); ?>
"PHP" converti en booléen : <?php var_dump($phpEnBooleen); ?>
Tableau vide converti en booléen : <?php var_dump($tableauVideEnBooleen); ?>
    </pre>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
