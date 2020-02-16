<!DOCTYPE html>
<html>
<head>
<title>Produits</title>
</head>
<body>

<h1>Liste de produit</h1>

<?php
$res="<table>";
$res=$res."<tr>";
$res=$res."<td>Nom</td>";
$res=$res."<td>Prix</td>";
$res=$res."</tr>";
foreach($products as $p){
		$res=$res."<tr>";
		$res=$res."<td>". $p->getNom()."</td>";
		$res=$res."<td>".$p->getPrice()."€</td>";
		$res=$res."<form action='index.php?id=".$p->getId()."' method='POST'><td><input type='submit' value='Detail'></td></form>";
		$res=$res."</tr>";
	}
	$res=$res."</table>";
	echo $res;
 ?>

</body>
</html>
