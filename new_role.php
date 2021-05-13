<?php
include('connect_db.php');
include('functions.php');
$role_name = null;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create new role</title>
  </head>
  <nav>
    <?=template_navbar()?>
  </nav>
  <body>

    <form method="post">
      <p>Create new role</p>
      <input type="text" name="role_name" id="role_name" placeholder="Name of new role">
      <button type="submit">Create</button>
    </form>

    <?php
    if(isset($_POST['role_name'])){
      $role_name = $_POST['role_name'];
      performQuery("INSERT INTO roles(role) VALUES('$role_name')");
    }

   ?>
  </body>
</html>
