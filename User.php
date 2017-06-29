<?php
  class User{
    private $_id= 'Maxime';
    private $_email = 'roma@gmail.com';
    private $_createdAt = '23/09/1994';

    public function get_id(){
      return $this->_id;
    }

    public function set_id($_id){
      return $this->_id = $_id;
    }

    public function get_email(){
      return $this->_email;
    }

    public function set_email($_email){
      return $this->_email = $_email;
    }

    public function get_createdAt(){
      return $this->_createdAt;
    }

    public function set_createdAt($_createdAt){
      return $this->_createdAt = $_createdAt;
    }
  }
?>
