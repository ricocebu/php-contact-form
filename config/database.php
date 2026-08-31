<?php

$host = getenv('DB_HOST');
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$database = getenv('DB_DATABASE');

$conn = mysqli_connect($host, $username, $password, $database);
echo getenv('DB_HOST');

if (!$conn) {

  die ("Connection failed!" . mysqli_connect_error());

}
  

?>