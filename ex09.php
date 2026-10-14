<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercice 9 — Notes des étudiants</title>
</head>
<body>
    <h1>Exercice 9 — Résultats de la classe</h1>
    <?php
    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10
    ];

    $somme = 0;
    $nombreValides = 0;
    $meilleureNote = null;
    $meilleurEtudiant = null;
    ?>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr><th>Étudiant</th><th>Note</th><th>Résultat</th></tr>
        </thead>
        <tbody>
            <?php
            foreach ($notes as $etudiant => $note) {
                $somme += $note;
                if ($note >= 10) {
                    $nombreValides++;
                }
                if ($meilleureNote === null || $note > $meilleureNote) {
                    $meilleureNote = $note;
                    $meilleurEtudiant = $etudiant;
                }
                echo "<tr>";
                echo "<td>" . $etudiant . "</td>";
                echo "<td>" . $note . "/20</td>";
                if ($note >= 10) {
                    echo "<td>Validé</td>";
                } else {
                    echo "<td>Non validé</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <?php
    $moyenne = $somme / count($notes);
    ?>
    <p>Somme des notes : <?php echo $somme; ?></p>
    <p>Moyenne de la classe : <?php echo $moyenne; ?></p>
    <p>Étudiants ayant validé : <?php echo $nombreValides; ?></p>
    <p>Meilleure note : <?php echo $meilleurEtudiant; ?> avec <?php echo $meilleureNote; ?>/20</p>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>