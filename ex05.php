<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercice 5 — Conditions</title>
</head>
<body>
    <h1>Exercice 5 — Moyenne et mention</h1>
    <?php
    $moyenne = 14;

    if ($moyenne < 0 || $moyenne > 20) {
        $mention = "Note invalide";
    } elseif ($moyenne < 10) {
        $mention = "Non validé";
    } elseif ($moyenne < 12) {
        $mention = "Passable";
    } elseif ($moyenne < 14) {
        $mention = "Assez bien";
    } elseif ($moyenne < 16) {
        $mention = "Bien";
    } else {
        $mention = "Très bien";
    }
    ?>
    <p>Moyenne : <?php echo $moyenne; ?>/20</p>
    <p>Résultat : <?php echo $mention; ?></p>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
