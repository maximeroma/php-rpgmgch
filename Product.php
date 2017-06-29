<?php
  class Product{
    private $_idP;
    private $_name;
    private $_price;

    public function get_idP(){
      return $this->_idP;
    }

    public function set_idP($_idP){
      return $this->_idP = $_idP;
    }

    public function get_name(){
      return $this->_name;
    }

    public function set_name($_name){
      return $this->_name = $_name;
    }

    public function get_price(){
      return $this->_price;
    }

    public function set_price($_price){
      return $this->_price = $_price;
    }
  }
?>
