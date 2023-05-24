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
         <h1>CATEGORY TABLE</h1>
         <div class="btn1">
           <a href="AddCategory.html">ADD CATEGORY</a>
         </div>
      </div>
            <div class="usercontainer">
              <table class="table table-striped table-hover">
                <thead>
                <tr>
                  <th scope="col">CID</th>
                  <th scope="col">Category Name</th>
                  <th scope="col">Category Description</th>

                </tr>
               </thead>
               <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Vegatable</td>
                  <td>Tomato</td>

                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Vegatable</td>
                  <td>Tomato</td>


                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Vegatable</td>
                  <td>Tomato</td>


                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Vegatable</td>
                  <td>Tomato</td>

                </tr>
      </tbody>
   </table>
  </div>
 </section>
    <script type="text/javascript" src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js">
    </script>
  </body>
</html>
