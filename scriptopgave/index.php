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
      <?php
        $data = performQuery("SELECT * FROM roles");
        while($row = mysqli_fetch_array($data)) {
          echo $row['role'] . "<br>";
        }

      ?>
    </main>
  </body>
</html>
