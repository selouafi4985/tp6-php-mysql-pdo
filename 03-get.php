<?php
$nom = $_GET["nom"] ?? "Invité";
$ville = $_GET["ville"] ?? "Non précisée";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Paramètres GET</title>
</head>
<body>
    <h1>Test des paramètres GET</h1>
    <p>Nom reçu : <?php echo htmlspecialchars($nom); ?></p>
    <p>Ville reçue : <?php echo htmlspecialchars($ville); ?></p>
    <p>Exemple d'URL : <code>?nom=Souad&amp;ville=Marrakech</code></p>
</body>
</html>