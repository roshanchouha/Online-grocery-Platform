
 <?php
 session_start();
    if(isset($_POST['save']))
    {
        $amount=$_POST['amount'];
      $fname=($_POST['fname']);
      $lname=($_POST['lname']);
      $username=($_POST['username']);
      $email=$_POST['email'];
      $address1=($_POST['address1']);
      $address2=($_POST['address2']);
      $country=$_POST['country'];
      $state=$_POST['state'];
      $zip=$_POST['zip'];
      $Payment=$_POST['Payment'];
      $date= date( "Y-m-d");
      $cardname=$_POST['cardname'];
      $exp=$_POST['exp'];
      $cvv=$_POST['cvv'];
      include 'config.php';

         $sql1="INSERT INTO useraddress(UID,fname,lname,email,username,address1,address2,country,state,zip) VALUES(  {$_SESSION['UID']},'$fname','$lname','$email','$username','$address1','$address2','$country','$state','$zip')";
        $result1=mysqli_query($conn,$sql1);

      echo   $sql2="INSERT INTO ordertable(paymentmethod,orderdate,amount,shipping,UID ) VALUES( '$Payment','$date',{$amount}, {$_SESSION['UID']},{$_SESSION['UID']})";
          $result2=mysqli_query($conn,$sql2);
         header("Location: http://localhost/grocery%20store/index.php");

      mysqli_close($conn);
    }
  ?>
