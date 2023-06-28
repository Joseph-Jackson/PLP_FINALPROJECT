<?php
$servename="localhost";
$username = "root";
$password = "";
$dbname="plp_usercomment_db";

//estblish connection -->

$conn =new mysqli($servename,$username,$password,$dbname);

//check connection
if(!$conn)
{
die(mysqli_error($conn));
}

?>