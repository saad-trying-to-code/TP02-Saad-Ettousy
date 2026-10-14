<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercice 7 — Boucles for</title>
</head>
<body>
    <h1>Exercice 7 — Boucles for</h1>
    <section>
        <h2>Table de multiplication de 7</h2>
        <?php
        $nombre = 7;
        for ($multiplicateur = 1; $multiplicateur <= 10; $multiplicateur++) {
            echo "<p>" . $nombre . " x " . $multiplicateur . " = " . ($nombre * $multiplicateur) . "</p>";
        }
        ?>
    </section>
    <section>
        <h2>Pyramide d'étoiles</h2>
        <pre><?php
        for ($ligne = 1; $ligne <= 6; $ligne++) {
            for ($etoile = 1; $etoile <= $ligne; $etoile++) {
                echo "*";
            }
            echo "\n";
        }
        ?></pre>
    </section>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
