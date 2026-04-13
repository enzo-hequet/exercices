<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TD8</title>
</head>
<body>
    <h1>Bienvenue au TD8</h1>
    <h2>Enregistrez votre nom</h2>
    <form action="affichage.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom_utilisateur" required>
        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>