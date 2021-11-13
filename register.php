<?php
include('db.php');
if($_SERVER['REQUEST_METHOD']=="POST")
{
            //posting values
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$contact_no=$_POST['contact_no'];
$photo=$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'],"profile/$photo");//filename and destination

$ins="insert into register(name,email,password,contact_no,photo,date_time)
                values('$name','$email','$password','$contact_no','$photo',now())";

                //echo $ins;
$status=mysqli_query($con,$ins);
if($status)
{
    echo"<script>alert('successfully inserted');
    window.location='register.php';
    </script>";
}
else{
    echo"<script>alert('fail');
    window.location='register.php';
    </script>";
}
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
  </head>
  <body>
    <header>
      <div class="container-fliud bg-primary text-center text-white h1 py-5">Admin
</div>
    </header>
<div class="container">
  <div class="row my-5">
    <div class="col-md-4 offset-md-4">
    <form method="post" action="" enctype="multipart/form-data">
  <div class="mb-3">
  <label for="exampleInputName1" class="form-label">NAME</label>
  <input type="text" name="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
</div>
<div class="mb-3">  
  <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password"  name="password"class="form-control" id="exampleInputPassword1">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputContact1" class="form-label">Contact Number</label>
    <input type="text" name="contact_no" class="form-control" id="exampleInputContact1">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPhoto1" class="form-label">Photo</label>
    <input type="file" name="photo" class="form-control" id="exampleInputPhoto1">
  </div>
  <button type="submit" class="btn btn-primary">REGISTER</button>
</form>
<div class="text-center py-1">
  <p><b>If you have account</b><a href="index.php">LOGIN</a></p>
</div>
</div>
</div>
</div>

<div class="container"><!--//to display records in the form of table on output screen-->
<table class="table">
  <thead>
    <tr>
      <th scope="col">SIno</th>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PHONE</th>
      <th scope="col">PHOTO</th>
      <th scope="col">DATETIME</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  
  </tbody>
</table>
</div>
<footer>
<div class="container-fluid text-center text-white h6 py-2 bg-primary">@Designed by DEGISNARE</div>
</footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>