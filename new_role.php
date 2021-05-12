<?php
include('connect_db.php');
$tag_name = null;
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create new role</title>
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
         <p> Create new role</p>
         <input type="text" name="role_name"
         placeholder="New role name">
         <button type="submit">Create</button>
       </form>
       <?php
       if(isset($_POST['role_name'])){
         $role_name = $_POST['role_name'];
         performQuery("INSERT INTO roles(roel) VALUES('$role_name')");
       }

   ?>
  </body>
</html>
