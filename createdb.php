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

// database creation
$sql = "CREATE DATABASE phpmydb";

if($conn->query($sql) === TRUE){
    echo "Database created successfully";
}else{
    echo $conn->error;
}

// connection close
$conn->close();

?>