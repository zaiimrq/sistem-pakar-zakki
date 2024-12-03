<?php


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_pakar";

/**
 * Deprecated
 */
// mysql_connect($dbhost,$dbuser,$dbpass);
// mysql_select_db($dbname);


$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
