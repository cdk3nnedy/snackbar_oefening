<?php

// Zorgt voor de connectie met de database

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'snackbar_oef';
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if($mysqli->connect_errno ) {
    printf("Connect failed: %s<br />", $mysqli→connect_error);
    exit();
}
