<?php
	require('Model/Product.php');
    class Repository{
        private $file;
        private $products;
        public function __construct(){
        $json = file_get_contents("Model/data.json");
        $parsed_json = json_decode($json,true);
        $this->products=[];
        foreach($parsed_json as $v){
			$product=new Product($v);
			array_push($this->products,$product);
        };
        }

      public function getAllProducts(){
            return $this->products;
      }

      public function getProductById($id){
      foreach($this->products as $product){
				if($product->getId()==$id)
					return $product;
				}
			return null;
        }


      }
