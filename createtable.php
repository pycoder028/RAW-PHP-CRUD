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

// database table creation
$sql = "CREATE TABLE student (id INT(6) AUTO_INCREMENT PRIMARY KEY,firstname VARCHAR (25),lastname VARCHAR(25),email VARCHAR(25))";

if($conn->query($sql) === TRUE){
    echo "Table created successfully";
}else{
    echo $conn->error;
}


// connection close
$conn->close();

?>