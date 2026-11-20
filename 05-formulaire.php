<?php
$produit = $_POST["produit"] ?? "";
$categorie = $_POST["categorie"] ?? "";
$prix = isset($_POST["prix"]) ? (float) $_POST["prix"] : 0;
$quantite = isset($_POST["quantite"]) ? (int) $_POST["quantite"] : 0;
$total = $prix * $quantite;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement produit - POST</title>
</head>
<body>
    <h1>Calcul du total d'un produit</h1>

    <form method="post" action="">
        <div>
            <label for="produit">Produit :</label>
            <input type="text" id="produit" name="produit" value="<?php echo htmlspecialchars($produit); ?>" required>
        </div>
        <br>
        <div>
            <label for="categorie">Catégorie :</label>
            <input type="text" id="categorie" name="categorie" value="<?php echo htmlspecialchars($categorie); ?>" required>
        </div>
        <br>
        <div>
            <label for="prix">Prix (DH) :</label>
            <input type="number" step="0.01" id="prix" name="prix" value="<?php echo htmlspecialchars((string) $prix); ?>" required>
        </div>
        <br>
        <div>
            <label for="quantite">Quantité :</label>
            <input type="number" id="quantite" name="quantite" value="<?php echo htmlspecialchars((string) $quantite); ?>" required>
        </div>
        <br>
        <button type="submit">Calculer</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] === "POST") : ?>
        <hr>
        <h2>Résumé :</h2>
        <p>Produit : <?php echo htmlspecialchars($produit); ?></p>
        <p>Catégorie : <?php echo htmlspecialchars($categorie); ?></p>
        <p>Prix unitaire : <?php echo number_format($prix, 2, '.', ''); ?> DH</p>
        <p>Quantité : <?php echo $quantite; ?></p>
        <p><strong>Total : <?php echo number_format($total, 2, '.', ''); ?> DH</strong></p>
    <?php endif; ?>
</body>
</html>