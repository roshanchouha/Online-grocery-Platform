 <?php
 include 'header.php'; ?>
  <body>
    <header >
      <div class="adminlogo">
        <a href="#" class="logo"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Grocery</a>
         <?php
         include 'dropdown.php' ?>

      </div>
    </header>


    <section class="section">

      <div class=" adminname">
         <h1>Hello Admin</h1>
      </div>
      <div class="icons">
           <div class="">
               <a href="dashboard.html"><img src="dashboard1.png" alt=""></a>
               <h1>Dashboard</h1>
           </div>
           <div class="">
                <a href="order.html"> <img src="order.png" alt=""></a>
               <h1>Order</h1>
           </div>
           <div class="">
               <a href="products.html"> <img src="products.png" alt=""></a>
               <h1>Products</h1>
           </div>
           <div class="">
           <a href="Users.html"> <img src="users.png" alt=""></a>
               <h1>Users</h1>
           </div>
           <div class="">
               <a href="category.html"> <img src="category.png" alt=""></a>
               <h1>Category</h1>
           </div>
           <div class="">
              <a href="#"> <img src="feedbacks.png" alt=""></a>
               <h1>Feedback</h1>
           </div>


      </div>

  </section>
  <script type="text/javascript" src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"> </script>
  </body>
</html>
