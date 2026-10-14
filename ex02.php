<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercice 2 — Variables</title>
</head>
<body>
    <h1>Exercice 2 — Variables et concaténation</h1>
    <?php
    $nom = "Ettousy";
    $prenom = "Saad";
    $age = 20;
    $formation = "Informatique appliquée";

    $presentation = $prenom . " " . $nom . " suit la formation " . $formation . ".";
    $presentation .= " J'apprends PHP.";

    $note = 12;
    $Note = 16;
    ?>
    <p><?php echo $presentation; ?></p>
    <p>Âge fictif pour l'exercice : <?= $age ?> ans</p>
    <p>Valeur de <code>$note</code> : <?= $note ?></p>
    <p>Valeur de <code>$Note</code> : <?= $Note ?></p>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
