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
// update value(id is unique)
$sql = "UPDATE student SET firstname = 'Noor',lastname = 'jannat',email = 'jannat@ymail.com' WHERE id = 2 ";

if(mysqli_query($conn, $sql) === TRUE){
    echo "Update Data";
}else{
    echo $conn->error;
}

// connection close
$conn->close();

?>