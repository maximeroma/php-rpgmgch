<?php
  require_once 'Product.php';

  //attribut product : idP, name , price

  class Cloth extends Product{
    private $_brand;

    public function get_brand(){
      return $this->_brand;
    }

    public function set_brand($_brand){
      return $this->_brand = $_brand;
    }

    public function try($string){
      return 'Romain et Florian essayent des ' . $string . '. CQLF!';
    }
  }

?>
