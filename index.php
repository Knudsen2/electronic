<?php
include('connect_db.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Electronic</title>
  </head>
  <body>
    <nav>
      <a href="index.php">Forside</a>
      <br>
      <a href="new_tag.php">Opret nyt tag</a>
      <br>
      <a href="new_role.php">Opret nyt role</a>
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
