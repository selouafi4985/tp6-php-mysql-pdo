<?php
$nom = "Souad El Ouafi";
$age = 21;
$ville = "Marrakech";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil - PHP et HTML</title>
</head>
<body>
    <h1>Présentation</h1>
    <p>Nom : <?php echo htmlspecialchars($nom); ?></p>
    <p>Âge : <?php echo htmlspecialchars((string) $age); ?> ans</p>
    <p>Ville : <?php echo htmlspecialchars($ville); ?></p>
</body>
</html>