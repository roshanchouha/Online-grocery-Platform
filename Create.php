<?php include 'header.php'; ?>

 <?php


    if(isset($_POST['save']))
    {
     $fname=($_POST['fname']);
     $lname=($_POST['lname']);
     $address=($_POST['address']);
     $password= md5($_POST['password']);
     $email=($_POST['email']);
     $mobile=($_POST['mobile']);
     include 'config.php';
     $sql = "SELECT email FROM users WHERE email= '{$email}' ";
     $result=mysqli_query($conn,$sql);

     if(mysqli_num_rows($result)>0)
     {
        echo ' <p style=" color:red; text-align:center;">  Already Exsits </p>';
     }
     else
     {
        echo $sql1="INSERT INTO users(first_name,last_name,AID,emailid,mobile_number,password) VALUES( '$fname','$lname',{$address},'$email',{$mobile},'$password')";
        $result1=mysqli_query($conn,$sql1);
       header("Location: http://localhost/grocery%20store/login.php");
     }
     mysqli_close($conn);
   }
  ?>

      <section>
         <div class="logcontainer1">
            <div class="loginfo">
                <h2>Groco<i class="fa fa-shopping-basket" aria-hidden="true"></i></h2>

            </div>
            <div class="logpage">
                  <form class="login-form" action="<?php  $_SERVER['PHP_SELF'] ?>" method="post" >
                    <h1>Sign Up</h1>
                    <input class="box" type="text" name="fname" value="" placeholder="First Name">
                    <input class="box" type="text" name="lname" value="" placeholder="Last Name">
                    <input class="box" type="number" name="address" value="" placeholder="Address">
                     <input class="box" type="email" name="email" value="" placeholder="your email">
                     <input class="box" type="password" name="password" value="" placeholder="password">
                     <input class="box" type="text" name="mobile" value="" placeholder="mobile No">


                     <input class="btn" type="submit" name="save" value="Sign Up" >
                  </form>
            </div>
         </div>
      </section>
  </body>
</html>
