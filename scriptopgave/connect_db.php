<?php
  $host = "localhost";
  $user = "root";
  $password = "root";
  $database = "electronics";
  $mysqli = mysqli_connect($host, $user, $password, $database);

  if(mysqli_connect_errno()){
    echo "connection failed". mysqli_connect_errno();
  }
    else {
      echo "connection success! <br>";
    }



 ?>