<?php
  $con = mysqli_connect('localhost','root','','crudoperation');
  if($con){
    // echo "success";
  }else{
    die(mysqli_error($con));
  }
?>
