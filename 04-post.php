<?php
$nom = $_POST["nom"] ?? "";
$email = $_POST["email"] ?? "";
$ville = $_POST["ville"] ?? "";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST</title>
</head>
<body>
    <h1>Formulaire avec méthode POST</h1>

    <form method="post" action="">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="<?php echo htmlspecialchars($nom); ?>" required>
        </div>
        <br>
        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
        </div>
        <br>
        <div>
            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" value="<?php echo htmlspecialchars($ville); ?>" required>
        </div>
        <br>
        <button type="submit">Envoyer</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] === "POST") : ?>
        <hr>
        <h2>Données reçues :</h2>
        <p>Nom : <?php echo htmlspecialchars($nom); ?></p>
        <p>Email : <?php echo htmlspecialchars($email); ?></p>
        <p>Ville : <?php echo htmlspecialchars($ville); ?></p>
    <?php endif; ?>
</body>
</html>