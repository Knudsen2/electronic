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
