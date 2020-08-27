<?php
$em=$_POST['em'];
$pass=$_POST['pwd'];
require_once "config.php";
$sql ="SELECT username, password FROM users where email='$em' AND password='$pass'";
if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0){
header('location:index.php');
}else
    echo "please enter valid email and password";
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>
