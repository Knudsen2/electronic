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
    <a href="new_tag.php">Opret nyt tag</a>
    <br>
    <a href="new_role.php">Opret nyt role</a>
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
  </body>
</html>
