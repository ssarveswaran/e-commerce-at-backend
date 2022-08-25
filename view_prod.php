<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    img{
        width:100%;
        height:inherit;
    }
    .pdtcard{
        width:300px;
        height:250px;
    }
    </style>
</head>
<body>
    
</body>
</html>




<?php
include 'menu.html';
$conn= new mysqli('localhost','root','','server1');
if($conn->connect_error){
    echo"failed";
    die;
}
$sql_obj=mysqli_query($conn,"select*from uproduct1");
$total_rows=mysqli_num_rows($sql_obj);
echo"<div class='d-flex'>";
for($i=0;$i<$total_rows;$i++){
    $row=mysqli_fetch_assoc($sql_obj);
    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];
    $imname=$row['imname'];
    echo"
    
    <div class='pdtcard col-xs-12 col-sm-6 col-md-4 text-center'>
    <div class='mt-4 m-2 pb-5 w-25 text-black'>
    <h1>$name</h1>
    
    
    <img style='width:200px' src='$imname'>
    <h1 class='text-success'>$price<h1>
    <h1>$details<h1>
    <div>
    <a  href='updel.php?pid=$pid'>
    <button style='background-color:red;border-radius:20px' ><i class='fa fa-trash   '></i></button>
    </a>
    </div>
    </div>
    </div>";
}
?>