<?php
include('connect_db.php');
include('functions.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Electronics</title>
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="index.php">Frontpage</a></li>
        <li><a href="create_new.php">Create new</a></li>
      </ul>
    </nav>

    <main>

      <form method="post">
        <p> Create new role</p>
        <input type="text" name="role_name"
        placeholder="New role name">
        <button type="submit">Create</button>
      </form>
      <?php
        if (isset($_POST['role_name'])){
          $role_name = $_POST['role_name'];
          performQuery("INSERT INTO roles(role) VALUES('$role_name')");
        }
        
       ?>
    </main>
  </body>
</html>
