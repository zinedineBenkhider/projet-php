<?php
    class Product{
		private $id;
        private $name;
        private $price;
        private $description;
        private $color;
        public function __construct($product){
            $this->name = $product['name'];
            $this->price = $product['price'];
            $this->description=$product['description'];
            $this->color=$product['color'];
            $this->id=$product['id'];
        }
		public function getId(){
            return $this->id;
        }

        public function getNom(){
            return $this->name;
        }

        public function getPrice(){
            return $this->price;
        }
        public function getDescription(){
            return $this->description;
        }

        public function getColor(){
            return $this->color;
        }


    }
