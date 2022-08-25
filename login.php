<?php
session_start();
$un=$_POST['uname'];
$up=$_POST['upass'];
$link=new mysqli("localhost",'root',"","details");
if($link->connect_error){
    echo"connect error";
    die;
}
$cmd="insert into datails values('$un','$up')";
$sql_status=mysqli_query($link,$cmd);
if($sql_status){
    $_SESSION['login_status']="success";
    header("location:home.php");
}
else{
    echo"failed";
}
?>