<?php
require_once "06-connexion.php";

$sql = "SELECT * FROM products WHERE price > 300";
$statement = $pdo->query($sql);
$products = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Catalogue des produits (> 300 DH)</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #444;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Catalogue des produits (Prix &gt; 300 DH)</h1>

    <?php if (count($products) > 0) : ?>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Total stock</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) : ?>
                    <?php
                    $prix = (float) $product["price"];
                    $quantite = (int) $product["quantity"];
                    $totalStock = $prix * $quantite;
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($product["name"]); ?></td>
                        <td><?php echo number_format($prix, 2, '.', ''); ?> DH</td>
                        <td><?php echo $quantite; ?></td>
                        <td><?php echo number_format($totalStock, 2, '.', ''); ?> DH</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>Aucun produit trouvé avec un prix supérieur à 300 DH.</p>
    <?php endif; ?>
</body>
</html>






