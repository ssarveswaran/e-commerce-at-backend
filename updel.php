<?php



$conn=new mysqli('localhost','root','','server1');
if($conn->connect_error){
    echo"connection error";
    die;
}
$pid=$_GET['pid'];
mysqli_query($conn,"delete from uproduct1 where pid=$pid");
header('location:view_prod.php');






?>