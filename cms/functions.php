<?php

$conn = null;

// Funktion til at forbinde databasen
function connect() {
  // sikre mig at variablen er global
  global $conn;

  //opretter den faktiske datbaseforbindelse
  $conn = mysqli_connect(DBHOST, DBUSER, DBPASS);

  //tester om der er fejl i forbindelsen
  if(!$conn) {
    die(mysqli_error($conn));
  }

  //Vælge den database vi gerne vil bruge
  mysqli_select_db($conn, DBNAME);
}

//Denne funktion henter den side vi er på ud fra db
function getPage($pid = null) {
  global $conn;

    // Test om denne side er definiret med id, ellers brug forside
    if ($pid != null) {
      //SQL kald til en defineret side (kig på WHERE)
      $sql = 'SELECT * FROM pages WHERE id = "'. $pid .'"';
    } else {
      // SQL kald til en forside (kig på WHERE)
      $sql = 'SELECT * FROM pages WHERE frontpage = 1';
    }

    // Foretag det faktiskekald til db baseret på valget med defineret side tidligere
    $page = mysqli_query($conn, $sql);


    //Test om siden findes
    if (mysqli_num_rows($page) > 0) {
      // Retirmer sodem data
      return mysqli_fetch_assoc($page);
    }

    //Returner fejl hvis siden ikke findes
    return false;
}

function getNav() {
   global $conn;

  $sql = 'SELECT id, title FROM pages';
  $result = mysqli_query($conn, $sql);
  $nav = [];

  if(mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $nav[] = $row;
    }
  }

  return $nav;
}

//debug funktion (sindssygt god at have i alle projekter)
function debug($data) {
  echo '<pre>';
  print_r($data);
  echo '</pre>';
}
