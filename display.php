<?php
 include 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crude Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="mt-5 ">
        <div class="m-2 bg-light p-4 rounded">
            <a href="create.php" class="btn btn-primary mb-4">Create User</a>

            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Sl no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Operation</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      $sql= "select * from `crud`";
                      $result = mysqli_query($con,$sql);
                      if($result){
                        // $row= mysqli_fetch_assoc($result);
                        // echo $row['name'];

                        while($row = mysqli_fetch_assoc($result)){
                          $id = $row['id'];
                          $name = $row['name'];
                          $email = $row['email'];
                          $mobile = $row['mobile'];

                          echo '<tr>
                          <th scope="row">'.$id.'</th>
                          <td>'.$name.'</td>
                          <td>'.$email.'</td>
                          <td>'.$mobile.'</td>
                          <td><a href="update.php?updateid='.$id.'" class="btn btn-warning">Update</a> <a href="delete.php?deleteid='.$id.'" class="btn btn-danger">Delete</a></td>
                        </tr>';
                        }
                      }else{
                        die(mysqli_error($result));
                      }
                  ?>
                </tbody>
              </table>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>