<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <thead>
        <th>ID</th>
        <th>Email</th>
        <th>createdAt</th>
      </thead>
      <tbody>
        <?php
          $users = require_once('users.php');
          foreach($users as $user){
            echo '<tr><td>' . $user->get_id() . '</td><td>' . $user->get_email() . '</td><td>' . $user->get_createdAt() . '</td><tr>';
          }
        ?>
      </tbody>
    </table>

  </body>
</html>
