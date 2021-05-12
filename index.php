<?php
include('connect_db.php');
include('functions.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Frontpage</title>
  </head>
  <nav>
    <?=template_navbar()?>
  </nav>
  <body>
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
