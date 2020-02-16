<?php
require('Model/Repository.php');
    class ProductController{
		private $repository;
		public function __construct(){
            $this->repository=new Repository();
        }

		function allProducts()
		{
		$products = $this->repository->getAllProducts();
		require('View/product_list.php');
		}

		function detailProduct($id)
		{
		$product = $this->repository->getProductById($id);
		require('View/details.php');
		}
}
