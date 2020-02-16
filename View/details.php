<!DOCTYPE html>
<html>
<head>
<title>Details</title>
</head>
<body>

<h1>Detail de produit</h1>
 <a href="index.php">Liste de produits</a> 
<?php
$res=$res."<ul>";
$res=$res."<li> Nom: ". $product->getNom()."</li>";
$res=$res."<li>Couleur: ". $product->getColor()."</li>";
$res=$res."<li>Description: ".$product->getDescription()."</li>";
$res=$res."<li>Prix: ".$product->getPrice()."€</li>";
$res=$res."</ul>";
echo $res;
?>
</body>
</html>
