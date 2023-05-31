<?php
session_start();
   if(isset($_POST['save']))
   {
     $fname=$_POST['fname'];
     $lname=$_POST['lname'];
     $sname=$_POST['sname'];
     $company=$_POST['company'];
     $email=$_POST['email'];


     include 'config.php';


      echo  $sql1="UPDATE  salesman SET   fname = '$fname',   lname = '$lname', sname = '$sname', email = '$email'  WHERE SID = '{$_SESSION['SID']} ' ;";
         $sql1 .="UPDATE store SET storename='$company'";

       $result1=mysqli_multi_query($conn,$sql1);
       header("Location: http://localhost/grocery%20store/seller/adminpanel.php");

     mysqli_close($conn);
   }
 ?>
