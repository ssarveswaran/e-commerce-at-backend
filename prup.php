<?php
print_r($_POST);
$name=$_POST['pname'];
$price=$_POST['pprice'];
$details=$_POST['pdet'];

date_default_timezone_set("asia/kolkata");
$unique_file_name=date("Y_M_D_H_i_s").'.jpg';
echo"filename=$unique_file_name";
move_uploaded_file($_FILES['imgg']['tmp_name'],$unique_file_name);
//header('location:prup.php');
$conn=new mysqli('localhost','root','','server1');
if($conn->connect_error){
    echo"connection error";
    die;
}
$cmd="insert into uproduct1(name,price,details,imname) values('$name',$price,'$details','$unique_file_name')";
$sql_status=mysqli_query($conn,$cmd);
if($sql_status){
    echo"product upload successfully";
    header("location:prup1.php");

}
else{
    echo"failed to upload";
}


?>