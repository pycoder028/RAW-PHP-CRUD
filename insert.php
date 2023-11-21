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

// data insert into table
$sql = "INSERT INTO student (firstname,lastname,email) VALUES ('Noor','Jannat','noorjannat@gmail.com')";

if($conn->query($sql) === TRUE){
    echo "Data Inserted successfully";
}else{
    echo $conn->error;
}

// connection close
$conn->close();

?>