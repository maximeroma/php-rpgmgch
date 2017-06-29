<?php
  require_once 'Vegetable.php';
  require_once 'Cloth.php';

  // attribut vegetable : productorName , expiresAt , Product(idP, name, price)
  // attribut cloth : brand, Product(idP, name, price)

   $vegetable1 = new Vegetable();
   $vegetable1->set_idP(0001);
   $vegetable1->set_name('salade');
   $vegetable1->set_price(1);
   $vegetable1->set_productorName('Jean-Paul');
   $vegetable1->set_expiresAt(20);

   $vegetable2 = new Vegetable();
   $vegetable2->set_idP(0002);
   $vegetable2->set_name('tomate');
   $vegetable2->set_price(3);
   $vegetable2->set_productorName('Sp6men');
   $vegetable2->set_expiresAt(15);


   $cloth1 = new Cloth();
   $cloth1->set_idP(0003);
   $cloth1->set_name('t-shirt');
   $cloth1->set_price(20);
   $cloth1->set_brand('Nike');

   $cloth2 = new Cloth();
   $cloth2->set_idP(0004);
   $cloth2->set_name('t-shirt');
   $cloth2->set_price(60);
   $cloth2->set_brand('Serge Blanco');

   $cloth3 = new Cloth();
   $cloth3->set_idP(0005);
   $cloth3->set_name('polo');
   $cloth3->set_price(70);
   $cloth3->set_brand('Lacoste');

   $products = [[$vegetable1, $vegetable2], [$cloth1, $cloth2, $cloth3]];


?>
