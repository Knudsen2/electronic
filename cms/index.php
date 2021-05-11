<?php

// definerer konstanter med database forbindelse info
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', 'root');
define('DBNAME', 'okitcms');

//inkluderer functions.php med alle funktioner
include('functions.php');

//forbinder til databasen(se functions.php)
connect();

// test om vi er på forsiden
if(isset($_GET['p'])) {

  $page = getPage($_GET['p']);
} else {

  $page = getPage();
}

//Hvis siden ikke forbindelse
if($page == false) {
  include('template/404.php');
} elseif($page['template'] && file_exists('template/' . $page['template'])) {
  include('template/' . $page['template']);
} else {
  include('template/default.php');
}
