<?php
include('connect_db.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Frontpage</title>
  </head>
  <body>
    <nav>
      <a href="index.php">Frontpage</a>
      <br>
      <a href="new_tag.php">Create new tag</a>
      <br>
      <a href="new_role.php">Create new role</a>
      <br>
      <a href="new_brand.php">Create new brand</a>
    </nav>

    <main>
      <?php
        $data = performQuery("SELECT * FROM tags");
        while($row = mysqli_fetch_array($data)) {
          echo $row['tag'] . "<br>";
        }
        ?>
    </main>
  </body>
</html>
