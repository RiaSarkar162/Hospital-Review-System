<?php
include_once 'dbh.php';
$username = $_POST['username'];
$hospitalname = $_POST['hospital'];
$area = $_POST['area'];
$bg = $_POST['bg'];
$enumber = $_POST['enumber'];
$comment = $_POST['comment'];

$sql = "Insert into blood(username,hospitalname,area,bg,enumber,comment) Values('$username','$hospitalname','$area','$bg','$enumber','$comment')";
mysqli_query($conn,$sql);

header("Location: bloodtimeline.php?data inserted successfully");

?>
