<?php
// php code to Insert data into mysql database from input text
 $hostname = "localhost";
 $username = "root";
 $password = "root";
 $databaseName = "bag";

 $connect = mysqli_connect($hostname,$username,$password, $databaseName);
if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 exit();
}
?>