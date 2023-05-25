
<?php
session_start();
    if(isset($_POST['button']))
    {
   $Qty=$_POST['quantity'];
   $PID=$_POST['PID'];
   $UID=$_POST['UID'];

    include 'config.php';

    $sql="SELECT price FROM product WHERE PID='{$PID}'";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {
      while ($row=mysqli_fetch_assoc($result)) {
        $amount=$row['price']*$PID;
      }
    }

   $sql1="INSERT INTO cart(UID,PID,quantity,amount) VALUES( {$UID},{$PID},{$Qty},{$amount} )";
       $result1=mysqli_query($conn,$sql1);
       $amount=0;
     // header("Location: http://localhost/grocery%20store/login.php");
    mysqli_close($conn);
  }
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shop Now</title>
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <header>
        <a href="#" class="logo"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Grocery</a>
         <nav>
           <a href="index.php">Home</a>
           <a href="#Grocery">Grocery</a>
           <a href="#Categories">Categories</a>
           <a href="#Products">Products</a>
           <a href="#features">features</a>
           <a href="#Testimonial">Testimonial</a>
           <a href="#ContectUs">ContectUs</a>
         </nav>
           <div class="icons">
              <div id="search-btn" class="fa fa-search"></div>
              <?php
              include 'config.php';
              $sql="SELECT count(PID) FROM cart WHERE UID='{$_SESSION['UID']}'";
              $result=mysqli_query($conn,$sql);

              if(mysqli_num_rows($result)>0)
              {
                while ($row=mysqli_fetch_assoc($result)) {
              ?>

              <div id="cart-btn" > <a href="addToCart.php"> <i class="fa fa-shopping-cart" aria-hidden="true"><?php echo $row['count(PID)'] ?></i></a></div>

               <?php
                 }
               }else{
                 echo "no post available";
               }
                mysqli_close($conn);
               ?>
              <div id="user" >  <a href="login.php"><i class="fa fa-user" aria-hidden="true"></i></a> </div>

           </div>

              <form class="search-from" action="index.html" method="post">
                  <input type="search" id="search-bar"name="" value="" placeholder="search">
                  <label for="search-bar" class="fa fa-search"></label>
              </form>
      </header>
      <section>
          <div class="shopcontainer">
              <div class="headbox">
                <div class="heading">

                  <?php
                  include 'config.php';
                  $sql="SELECT count(PID) FROM product";
                  $result=mysqli_query($conn,$sql);

                  if(mysqli_num_rows($result)>0)
                  {
                    while ($row=mysqli_fetch_assoc($result)) {


                  ?>


                    <h1>All items(<?php echo $row['count(PID)'] ?> items)</h1>

                  <?php
                    }
                  }else{
                    echo "no post available";
                  }
                   mysqli_close($conn);
                  ?>

                   <h2>Sort By
                   <select class="select" name="">
                      <option value="">newest</option>
                      <option>popularity</option>
                      <option value="">Low to High</option>
                   </select>
                   </h2>
                </div>
                <table class="table" >
                  <tbody class="tbody" style="  display: grid;
                    grid-template-columns:repeat(auto-fit,minmax(30rem,1fr));
                    gap: 10rem;
                    justify-content: center;
                    align-items: center;">
                    <?php

                         include 'config.php';

                           $sql="SELECT * FROM product";

                         $result2=mysqli_query($conn,$sql);

                         if(mysqli_num_rows( $result2 )>0)
                         {
                           while($row=mysqli_fetch_assoc($result2))
                           {


                    ?>
                      <tr>
                        <td class="box box1">
                          <div class="img">
                            <img src=" admin\upload\<?php echo  $row['image'] ?>" alt="pic">
                          </div>
                          <div class="productName">
                             <h3><?php  echo $row['product_name']; ?>-<?php  echo $row['weight']; ?>Kg</h3>
                              <h2>Rs <?php  echo $row['price']; ?></h2>
                              <form class="" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

                                <input style="border:1px solid;   background-color: #eee; margin:15px 0; font-size:20px; border-radius:0.8rem; width:100px; text-align:center" type="number" name="quantity" value="" placeholder="Qty"><br>
                                <input type="hidden" name="PID" value="<?php echo $row['PID']; ?>">
                                <input type="hidden" name="UID" value=" <?php   echo  $_SESSION['UID'] ?>">
                                 <button class="btn"type="submit" name="button"> add to cart  </button>

                              </form>
                           </div>


                      </tr>


                          <?php
                               }
                             }else{
                              echo "empty";
                             }

                          ?>

                  </tbody>
                </table>

              </div>
          </div>
      </section>

  </body>
</html>
