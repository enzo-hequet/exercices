<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat</title>
</head>
<body>
    <?php
    if (isset($_POST['nom_utilisateur'])) {
        $nom = $_POST['nom_utilisateur'];

        $nomMajuscule = mb_strtoupper($nom, 'UTF-8');
        
        echo "<h1>Nom enregistré : " . htmlspecialchars($nomMajuscule) . "</h1>";
    } else {
        echo "<h1>Aucun nom n'a été saisi.</h1>";
    }
    ?>
    <br>
    <a href="index.php">Retour au formulaire</a>
</body>
</html>