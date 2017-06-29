<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Vegetable</h1>
    <table>
      <thead>
        <th>idP</th>
        <th>name</th>
        <th>price</th>
        <th>productorName<th>
        <th>expiresAt<th>
      </thead>
      <tbody>
        <?php
          require_once 'products.php';
          foreach($products[0] as $product) {
            echo '<tr><td>'.$product->get_idP().'</td><td>'.$product->get_name().'</td><td>'.$product->get_price().'</td><td>' . $product->get_productorName() . '</td><td>' . $product->get_expiresAt() . '</td></tr>';
          }
        ?>
      </tbody>
    </table>
    <h1>Cloth</h1>
    <table>
      <thead>
        <th>idP</th>
        <th>name</th>
        <th>price</th>
        <th>brand</th>
      </thead>
      <tbody>
        <?php
          //require_once 'products.php';
          foreach($products[1] as $product){
            echo '<tr><td>'.$product->get_idP().'</td><td>'.$product->get_name().'</td><td>'.$product->get_price().'</td><td>'.$product->get_brand().'</td></tr>';
          }
        ?>
      </tbody>
    </table>
  </body>
</html>
