<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'mysql');
define('DB_NAME', 'smartfarms');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


//database_connection.php
$connect = new PDO("mysql:host=localhost;dbname=smartfarms", "root", "mysql");

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}
?>