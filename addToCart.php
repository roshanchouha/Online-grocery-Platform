<?php include 'header.php'; ?>


      <section>
     <div class="addcontainer">
         <div class="box1">
          <table class="tabel">
             <thead class="thead">
               <th>items(s)deatil</th>
               <th>Quantity</th>
               <th>Amount</th>
             </thead>
             <tbody class="tbody">
               <?php

                 include 'config.php';

                 $sql="SELECT * FROM product  ";
                 $result=mysqli_query($conn,$sql) or die("query failed");

                 if(mysqli_num_rows($result)>0)
                 {
                   while ($row=mysqli_fetch_assoc($result))
                   {

                 ?>
                <tr>
                  <td class="item">
                     <div class="img">
                       <img src="product-1.png" alt="">
                     </div>
                     <div class="productName">
                        <h3><?php  echo $row['product_name']; ?>-<?php  echo $row['weight']; ?>KG</h3>
                         <h2>Rs <?php  echo $row['price']; ?></h2>
                     </div>
                  </td>
                  <td>
                    <div class="quantity">
                       <input class="select" type="number" name="" value="">
                    </div>
                  </td>
                  <td class="amount">  000 </td>
                </tr>
                <?php
              }
            }else{
              echo "Empty";
            }
             mysqli_close($conn);
            ?>
             </tbody>
          </table>
          <a class="btn" href="ShopNow.php"><i class="footer fa fa-arrow-left"> </i>Continue Shopping</a>
         </div>

         <div class="box2">
                <table class="table2">
                   <tbody class="tbody2">
                       <tr class="itemcost">
                         <td>item(s) Total</td>
                         <td class="amt">Rs 156</td>
                       </tr>
                       <tr class="delivery">
                         <td>Delivery Charge</td>
                         <td class="free">Free</td>
                       </tr>
                       <tr class="totalamount">
                         <td>Amount Payable</td>
                         <td>Rs 156</td>
                       </tr>
                   </tbody>
                </table>
                <button class="btn"type="submit" name="button"> CHECKOUT</button>
         </div>
     </div>
  </section>


  </body>
</html>
