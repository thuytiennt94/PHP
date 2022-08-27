<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'dbemployees');

//attempt to connect to mysql database
$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

//check connection
if ($link === false){
    die("error: could not connect. " . mysqli_connect_error());
}
?>
