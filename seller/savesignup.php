<?php

 if(isset($_POST['save']))
 {
   $fname=($_POST['fname']);
   $lname=($_POST['lname']);
    $sname=($_POST['uname']);
    $password= md5($_POST['password']);
    echo $_POST['password'];
    $email=($_POST['email']);
    $mobile=($_POST['mobile']);
    include 'config.php';
    $sql = "SELECT email FROM salesman WHERE email= '{$email}' ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
       echo ' <p style=" color:red; text-align:center;">  Already Exsits </p>';
    }
    else
    {
       echo $sql1="INSERT INTO salesman(fname,lname,sname, email,mobile ,passward) VALUES( '{$fname}','{$lname}','{$sname}',  '{$email}',{$mobile},'{$password}')";
       $result1=mysqli_query($conn,$sql1);
       header("Location: http://localhost/grocery%20store/seller/login.php");
    }
    mysqli_close($conn);
  }
 ?>
