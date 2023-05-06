<?php
$server= "localhost";
$user="root";
$password="123456";
$db= "db";


$conn= mysqli_connect($server,$user,$password,$db);
if(!$conn){
    die("Connection Failed: ". mysqli_connect_error());
}
echo "Connection Established <br>";

    mysqli_close($conn);


?>

