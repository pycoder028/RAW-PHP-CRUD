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
//data selection from database
$sql = "SELECT * FROM student";

$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
    echo $row["id"]." | ".$row["firstname"]." | ".$row["lastname"]." | ".$row["email"];
    echo "</br>";
    }
}else{
    echo $conn->error;
}

// connection close
$conn->close();

?>