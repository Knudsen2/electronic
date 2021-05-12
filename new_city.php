<?php
include('connect_db.php');
$city_name = null;
?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Create new city</title>
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
          <p>Create new city</p>
          <input type="text" name="city_name" id="city_name" placeholder="Name of new city">
          <button type="submit">Create</button>
        </form>

        <?php
        if(isset($_POST['city_name'])){
          $city_name = $_POST['city_name'];
          performQuery("INSERT INTO cities(city) VALUES('$city_name')");
        }
       ?>
       <body>
         </html>
