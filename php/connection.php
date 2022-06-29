<?php
$service="localhost";
$username="root";
$password="";
$dbname="db_registros";


$conn=mysqli_connect($service,$username,$password,$dbname);
if(!$conn){
    die("Connection failed". mysqli_connect_error());
}
echo "connection successfully";
?>