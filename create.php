<?php
    include 'connect.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
    
      $sql= "insert into `crud` (name, email, mobile) values('$name','$email', '$mobile')";
    
      $result = mysqli_query($con,$sql);
      if($result){
        header('location:display.php');
      }else{
        die(mysqli_error($result));
      }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create New</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="mt-5 ">
        <div class="container bg-light p-4 rounded">
            <form action="create.php" method="post">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name Here...">
                  </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter Your Email Here...">
                </div>    
                <div class="mb-3">
                  <label class="form-label">Mobile</label>
                  <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile number...">
                </div>
                <div class="pb-4">
                    <button type="submit" class="btn btn-primary d-flex mx-auto">Create</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>