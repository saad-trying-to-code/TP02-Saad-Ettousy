<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercice 8 — Boucles et contrôles</title>
</head>
<body>
    <h1>Exercice 8 — Boucles et contrôles</h1>
    <section>
        <h2>Nombres pairs de 0 à 20</h2>
        <?php
        $nombrePair = 0;
        while ($nombrePair <= 20) {
            if ($nombrePair == 10) {
                echo "<strong>" . $nombrePair . "</strong> ";
            } else {
                echo $nombrePair . " ";
            }
            $nombrePair += 2;
        }
        ?>
    </section>
    <section>
        <h2>Comparaison de while et do-while</h2>
        <?php
        $compteur = 5;
        $executionsWhile = 0;
        while ($compteur < 5) {
            $executionsWhile++;
            $compteur++;
        }

        $compteur = 5;
        $executionsDoWhile = 0;
        do {
            $executionsDoWhile++;
            $compteur++;
        } while ($compteur < 5);
        ?>
        <p>Exécutions de while : <?= $executionsWhile ?></p>
        <p>Exécutions de do-while : <?= $executionsDoWhile ?></p>
    </section>
    <section>
        <h2>Continue et break</h2>
        <?php
        for ($compteur = 1; $compteur <= 20; $compteur++) {
            if ($compteur >= 16) {
                break;
            }
            if ($compteur % 3 == 0) {
                continue;
            }
            echo $compteur . " ";
        }
        ?>
    </section>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
