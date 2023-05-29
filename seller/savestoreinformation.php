<?php

if(isset($_POST['save']))
{
  $sname=($_POST['sname']);
  $rname=($_POST['rname']);
  $email=($_POST['email']);
  $date=$_POST['date'];
  $address1=$_POST['address-line1'];
  $address2=$_POST['address-line2'];
  $city=$_POST['city-town'];
  $state=$_POST['state-province-region'];
  $zip=$_POST['zip-postal-code'];
  $country=$_POST['country'];
  include 'config.php';

  echo  $sql1="INSERT INTO store(storename,retailername,email,rdate,address1,address2,city,state,zip,country  ) VALUES( '$sname','$rname','$email','$date','$address1','$address2','$city','$state',{$zip},'$country')";
    $result1=mysqli_query($conn,$sql1);
    header("Location: http://localhost/grocery%20store/seller/adminpanel.php");

  mysqli_close($conn);
}

 ?>
