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
              <div id="cart-btn" > <a href="addToCart.php"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a></div>
              <div id="user" >  <a href="login.php"><i class="fa fa-user" aria-hidden="true"></i></a> </div>
              <div id="menu-btn" class="fa fa-bars"></div>
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
                   <h2>All items(300 item)</h2>
                   <h2>Sort By
                   <select class="select" name="">
                      <option value="">newest</option>
                      <option>popularity</option>
                      <option value="">Low to High</option>
                   </select>
                   </h2>
                </div>
                <table class="table">
                  <tbody class="tbody">
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

                              <button class="btn"type="submit" name="button"><a href="addToCart.php?id=<?php echo $row['PID']; ?>">add to cart</a>  </button>
                          </div>
                      </tr>

                          <?php
                               }
                             }else{
                              echo "empty";
                             }
                             mysqli_close($conn);
                          ?>

                  </tbody>
                </table>

              </div>
          </div>
      </section>
  </body>
</html>
