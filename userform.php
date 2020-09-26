<?php
include_once 'dbh.php';

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$sql = "insert into userform (user,email,mobile,comment)
values ('$user','$email','$mobile','$comment')";
mysqli_query($conn,$sql);


header("Location: index.php?data inserted successfully");

?>
