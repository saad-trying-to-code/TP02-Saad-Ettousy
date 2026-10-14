<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Résultat du formulaire POST</title>
</head>
<body>
    <h1>Résultat du formulaire POST</h1>
    <?php
    if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["groupe"])) {
        $nom = trim($_POST["nom"]);
        $prenom = trim($_POST["prenom"]);
        $groupe = trim($_POST["groupe"]);

        if ($nom !== "" && $prenom !== "" && $groupe !== "") {
            $nomSecurise = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
            $prenomSecurise = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
            $groupeSecurise = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');

            echo "<p>Bienvenue " . $prenomSecurise . " " . $nomSecurise . " (Groupe " . $groupeSecurise . ") !</p>";
        } else {
            echo "<p>Erreur : tous les champs (nom, prénom et groupe) doivent être remplis.</p>";
        }
    } else {
        echo "<p>Aucune donnée reçue. Veuillez passer par le formulaire POST pour soumettre vos informations.</p>";
    }
    ?>
    <p><a href="ex10_post.html">Retour au formulaire POST</a></p>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html> 