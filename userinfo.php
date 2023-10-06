<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection OK";
} else{
    echo "No Connetion";
}
mysqli_select_db($con, 'phpwebsite');

$user = $_POST['user'];
$email = $_POST['email'];

$query = "INSERT INTO `userin` (`user`, `email`)
VALUES ('$user','$email')";

//echo "$query";

mysqli_query($con,$query);
?>