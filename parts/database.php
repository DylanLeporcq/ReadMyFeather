<?php

$servername = "localhost";  /* localhost in offline */
$username = "root";  /* root in online, username of the database if we push it online */
$password = "";  /* password of the database, empty at this moment (offline) */
$dbname = "rmf"; /* name of the database */
$conn = new Mysqli($servername, $username, $password);  /* we set up the connection to the database */

/* error message if the connection is failed */
if ($conn->connect_errno) {
die("Connection failed: " . $conn->connect_errno);
} else {
$conn->select_db($dbname);
}