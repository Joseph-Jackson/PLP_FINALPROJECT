<?php
include('connection.php');

if(isset($_POST['send']))
{

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$sql = "insert into comments (first_name,last_name,email,comment) values ('$fname','$lname','$email','$comment')";
$res = mysqli_query($conn,$sql);

//check if data inserted as successfull

if($res)
{
    // echo "<script>alert('Your Comment Sent as Successfully!')</script>";
    header('location:index.html');
}
else{
    die(mysqli_error($conn));
    header('location:index.html');
}
}


?>