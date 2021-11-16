<?php
include_once 'dbConnection.php';


$experience = $_POST['experience'];
$comments= $_POST['comments'];

$q=mysqli_query($con,"INSERT INTO comments VALUES  ( '$experience' , '$comments')")or die ("Error");
header("location:thank.html");
?>