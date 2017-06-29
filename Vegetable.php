<?php

  require_once 'Product.php';

  //attribut Product : idP, name, price

  class Vegetable extends Product{
    private $_productorName;
    private $_expiresAt;

    public function get_productorName(){
      return $this->_productorName;
    }

    public function set_productorName($_productorName){
      return $this->_productorName = $_productorName;
    }

    public function get_expiresAt(){
      return $this->_expiresAt;
    }

    public function set_expiresAt($_expiresAt){
      return $this->_expiresAt = $_expiresAt;
    }

    public function isFrech(){
      if($this->_expiresAt <= 40){
        return true;
      }
      return false;
    }
  }

?>
