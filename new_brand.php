<?php
include('connect_db.php');
$brand_name = null
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create new brand</title>
  </head>
  <nav>
    <a href="index.php">Frontpage</a>
    <br>
    <a href="new_tag.php">Create new tag</a>
    <br>
    <a href="new_role.php">Create new role</a>
    <br>
    <a href="new_brand.php">Create new brand</a>
  </nav>
  <body>

    <form method="post">
      <p>Create new brand</p>
      <input type="text" name="brand" id="brands" placeholder="Name of new brand">
      <button type="submit">Create</button>
    </form>

    <?php
    if(isset($_POST['brand_name'])){
      $brand_name = $_POST['brand_name'];
      performQuery("INSERT INTO brands(brand) VALUES('$brand_name')");
    }

   ?>

  </body>
</html>
