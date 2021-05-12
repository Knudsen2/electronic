<?php
include('connect_db.php');
$tag_name = null;
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create new tag</title>
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
      <p>Create new tag</p>
      <input type="text" name="tag_name" id="tag_name" placeholder="Name of new tag">
      <button type="submit">Create</button>
    </form>

    <?php
    if(isset($_POST['tag_name'])){
      $tag_name = $_POST['tag_name'];
      performQuery("INSERT INTO tags(tag) VALUES('$tag_name')");
    }

   ?>
  </body>
</html>
