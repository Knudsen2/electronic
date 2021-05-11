<?php


function performQuery($sql) {
  global $mysqli;
  $result = mysqli_query($mysqli, $sql);

    if ($result) {
      echo "Query success <br> <br>";
      return $result;
    }
    else {
      echo "<br>Something went wrong";
      return null;
    }
}


//debug funktion (sindssygt god at have i alle projekter)
function debug($data) {
  echo '<pre>';
  print_r($data);
  echo '</pre>';
}
