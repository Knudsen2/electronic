<?php
include('connect_db.php');
$tag_name = null;
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Opret ny vare</title>
  </head>
  <nav>
    <a href="index.php">Forside</a>
    <br>
    <a href="new_item.php">Opret nyt tag</a>
  </nav>
  <body>
    her skal vi have mulighed for at oprette en ny vare til vores database ved hjælp af PHP og html forms

    <form method="post">
      <p>Opret nyt tag</p>
      <input type="text" name="tag_name" id="tag_name" placeholder="Navnet på nyt tag">
      <button type="submit">Opret</button>
    </form>

    <?php
    if(isset($_POST['tag_name'])){
      $tag_name = $_POST['tag_name'];
      performQuery("INSERT INTO tags(tag) VALUES('$tag_name')");
    }

   ?>

<!--- Create new role-->

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
