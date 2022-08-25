<?php
 include 'menu.html';
 ?>











<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="d-flex vh-100 justify-content-center align-items-center">
    <form class="w-25 bg-success p-3"method="POST" action="prup.php" enctype="multipart/form-data">
        <h3 class="text-white">ADMIN UPLOAD</h3>
        <input type="text" class="form-control" placeholder="PRODUCT NAME" name="pname">
        <input type="number" class="mt-4 form-control" placeholder="PRODUCT PRICE" name="pprice">
        <textarea type="text" class="mt-4 form-control" placeholder="PRODUCT DESCRIPTION" rows="8" name="pdet"></textarea>
        <input  type="file" class="mt-4 form control"accept="image/*" name="imgg">
        <br>
        <input type="submit" class="mt-2 form-control bg-danger text-white"value="upload">
    </form>
    </div>
    
</body>
</html>