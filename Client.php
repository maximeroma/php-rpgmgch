<?php
  require 'User.php';

  // attribut user : id, email, createdAt

  class Client extends User{

    private $_billAmount = 0;
    private $_cart = [];

    public function get_billAmount(){
      return $this->_billAmount;
    }

    public function set_billAmount($_billAmount){
      return $this->_billAmount = $_billAmount;
    }

    public function get_cart(){
      return $this->_cart;
    }

    public function addProductToCart(Product $products){
      $this->_cart = array_push($this->_cart, $products);
    }

    public function buy(Product $products){
      $this->_billAmount += $products->_price;
      $this->addProductToCart($products);
    }
  }


?>
