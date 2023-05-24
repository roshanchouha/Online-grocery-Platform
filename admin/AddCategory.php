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
    <section class="section section1">
      <div class="AddProductContainer">
        <div class="">
           <h1>ADD CATEGORY</h1>
        </div>
         <form class="" action="index.html" method="post">
           <div class="box">
             <label for="">Category Name</label>
             <br>
               <input type="text" name="" value="" placeholder="Product Name">
           </div>
           <div class="box">
             <label for="">Category Description</label>   <br>
              <input type="text" name="" value="" placeholder="Units">
           </div>


              <div class="btn2">
                <button type="submit" name="button">ADD</button>
              </div>
         </form>
      </div>
    </section>
      <script type="text/javascript" src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"> </script>
  </body>
</html>
