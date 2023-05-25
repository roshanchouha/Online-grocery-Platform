<?php include 'header.php'; ?>

      <section>
         <div class="logcontainer">
            <div class="loginfo">

                <h2>Groco<i class="fa fa-shopping-basket" aria-hidden="true"></i></h2>
            </div>
            <div class="logpage">
                  <form class="login-form" action="<?php echo   $_SERVER['PHP_SELF'] ?>" method="post" >
                    <h1>Login Now</h1>
                     <input class="box" type="email" name="email" value="" placeholder="your email">
                     <input class="box" type="password" name="password" value="" placeholder="password">
                     <p> Forget Your password  <a href="#" >Click Here</a></p>
                     <p> Don't Have An Account  <a href="Create.php" >Create Now</a></p>
                     <input class="btn" type="submit" name="login" value="Login Now" >
                  </form>
                  <?php

                       if(isset($_POST['login']))
                      {
                         $username=$_POST['email'];
                         $password=md5($_POST['password']) ;
                         include 'config.php';
                       $sql="SELECT UID,emailid,password,first_name FROM users WHERE emailid = '{$username}'  AND  password='{$password}'";
                         $result=mysqli_query($conn,$sql);

                             if( mysqli_num_rows($result)>0)
                             {
                              while ($row=mysqli_fetch_assoc($result))
                               {
                                    session_start();
                                     $_SESSION['email']= $row['emailid'];
                                     $_SESSION['fname']= $row['first_name'];
                                     $_SESSION['UID']= $row['UID'];
                                   header("Location: http://localhost/grocery%20store/index.php");

                                }
                              }

                             else{
                              echo  '<p class="alert alert-danger"> User not exsits</p>';
                             }

                          mysqli_close($conn);
                         }
                   ?>
            </div>
         </div>
      </section>
  </body>
</html>
