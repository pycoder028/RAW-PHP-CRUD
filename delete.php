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
// data delete from database
$sql = "DELETE FROM student WHERE id = 3";

if($conn->query($sql) === TRUE){
    echo "Data was successfully deleted";
}else{}

// connection close
$conn->close();

?>