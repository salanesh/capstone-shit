<?php
$servername ="localhost";
$database = "parishdata";
$username = "root";
$password = "";

$connection = mysqli_connect($servername,$username,$password,$database);
if($connection===false){
    die("Error: Could not connect.".mysqli_connect_error());
}



?>