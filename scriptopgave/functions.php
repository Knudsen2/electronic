<?php

function pdo_connect_mysql() {
    // MySQL info til connect
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = 'root';
    $DATABASE_NAME = 'electronics';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// smider en fejl hvis i ikke har opdateret MySQL korrekt, se linje 4-7
    	exit('Failed to connect to database!');
    }
}
