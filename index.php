<?php
require('controller/ProductController.php');
$controller=new ProductController();
if (isset($_GET['id'])) {
      $controller->detailProduct($_GET['id']);
}
else {
      $controller->allProducts();
}
