<?php
session_start();
if(isset($_SESSION['login_status'])){
    if($_SESSION['login_status']=='success')
    {

    }
    else
    {
        echo"illegal access";
        die;
    }
    }

else{
    echo"illegal access";
    die;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <div style="display:flex;background-color:chocolate;justify-content:space-around;padding:20px">
<div style="color:white">home</div>
    <div style="color:white">gallery</div>
    <div style="color:white">about us</div>
    <div style="color:white">contact</div>
    <a style="color:white" href="logout.php">logout</a>
</body>
</html>