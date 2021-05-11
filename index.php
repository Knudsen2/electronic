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
      <a href="new_item.php">Opret nyt tag</a>
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
