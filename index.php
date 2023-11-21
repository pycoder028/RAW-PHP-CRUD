<?php

// database connectivity
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'phpmydb';

$conn = new mysqli($hostname,$username,$password, $dbname);

if($conn->connect_error){
    echo $conn->connect_error;
}

// connection close
$conn->close();

?>