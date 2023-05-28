<?php
include 'header.php'; ?>
  <body>
    <header >
      <div class="adminlogo">
        <?php
        include 'dropdown.php' ?>
        <a href="#" class="logo"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Grocery</a>
      </div>
    </header>
    <section class="section">
      <div class="users">
         <h1>Users Table</h1>
         <div class="btn1">
            <a href="#">ADD USERS</a>
         </div>
      </div>
            <div class="usercontainer">
              <table class="table table-striped table-hover">
                <thead>
                <tr>
                  <th scope="col">UID</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Address</th>
                  <th scope="col">Email Id</th>
                  <th scope="col">Mobile Number</th>
                  <th scope="col">Password</th>
                  <th scope="col">Actions</th>
                </tr>
               </thead>
               <tbody>
                 <?php

                      include 'config.php';

                        $sql="SELECT * FROM users ORDER BY UID DESC";

                      $result2=mysqli_query($conn,$sql);

                      if(mysqli_num_rows( $result2 )>0)
                      {
                        while($row=mysqli_fetch_assoc($result2))
                        {


                 ?>
                <tr>
                  <th scope="row"><?php  echo $row['UID']; ?></th>
                  <td><?php  echo $row['first_name']; ?></td>
                  <td><?php  echo $row['last_name']; ?></td>
                  <td><?php  echo $row['AID']; ?></td>
                  <td><?php  echo $row['emailid']; ?></td>
                  <td><?php  echo $row['mobile_number']; ?></td>
                  <td><?php  echo $row['password']; ?></td>
                  <td class='edit'><a href='#'><i class='fa fa-edit'></i></a></td>
                  <td class='delete'><a href='#'><i class='fa fa-trash-o'></i></a></td>

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
 </section>
    <script type="text/javascript" src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js">
    </script>
  </body>
</html>
