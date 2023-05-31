<?php

  include 'config.php';
  session_start();
  $sql="SELECT email FROM store WHERE email='{$_SESSION['email']}'";
  $result=mysqli_query($conn,$sql) or die("query failed");

  if(mysqli_num_rows($result)>0)
  {
    while ($row=mysqli_fetch_assoc($result))
    {
       header("Location: http://localhost/grocery%20store/seller/adminpanel.php");
    }
  }
  else {
    echo "Register your store";
  }
  ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Store information</title>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
   <style media="screen">

        .form-group label{
         font-weight: bold;

         padding: 3px;;
        }
        .container{
          padding: 2rem;
          width: 60%;
          margin: 4rem 15rem;
           border-radius: 0.5rem;
           background: #FAF9F6;

        }
        .body{
          background: #0000FF;
        }

   </style>
  </head>

  <body class="body">

    <div class="container">
<div class="row">
 <div class="col-xs-12">
   <form class="form-horizontal" action="savestoreinformation.php"   method="post">

     <h2>Retailer Registration Form</h2>


     <div class="form-group">
       <label for="inputFullName" class="col-sm-2 control-label">Store Name</label>
       <div class="col-sm-10">
         <input type="text" class="form-control" id="inputFullName" name="sname" placeholder="Store Name">
       </div>
     </div>


     <div class="form-group">
       <p></p>
       <label for="inputFullName" class="col-sm-2 control-label">Retailer Name</label>
       <div class="col-sm-10">
         <input type="text" class="form-control" id="inputFullName" name="rname" placeholder="Full Name">
       </div>
     </div>


     <div class="form-group">
       <p></p>
       <label for="inputFullName" class="col-sm-2 control-label">Email</label>
       <div class="col-sm-10">
         <input type="email" class="form-control" id="inputFullName" name="email" placeholder="Full Name">
       </div>
     </div>

     <div class="form-group">
       <p></p>
       <label for="inputFullName" class="col-sm-2 control-label">Registration Date</label>
       <div class="col-sm-10">
         <input type="date" class="form-control" id="inputFullName" name=" date" placeholder="Date">
       </div>
     </div>

     <div class="form-group">
       <p class="col-sm-offset-2 col-sm-10 help-block">Street address, P.O. box, company name, c/o</p>
       <label for="inputAddressLine1" class="col-sm-2 control-label">Address Line 1</label>
       <div class="col-sm-10">
         <input type="text" class="form-control" id="inputAddressLine1" name="address-line1" placeholder="Address Line 1">
       </div>
     </div>

     <div class="form-group">
       <p class="col-sm-offset-2 col-sm-10 help-block">Apartment, suite , unit, building, floor, etc.</p>
       <label for="inputAddressLine2" class="col-sm-2 control-label">Address Line 2</label>
       <div class="col-sm-10">
         <input type="text" class="form-control" id="inputAddressLine2" name="address-line2" placeholder="Address Line 2">
       </div>
     </div>

     <div class="form-group">
       <p></p>
       <label for="inputCityTown" class="col-sm-2 control-label">City / Town</label>
       <div class="col-sm-10">
         <input type="text" class="form-control" id="inputCityTown" name="city-town" placeholder="City / Town">
       </div>
     </div>

     <div class="form-group">
       <p></p>
       <label for="inputStateProvinceRegion" class="col-sm-2 control-label">State / Province / Region</label>
       <div class="col-sm-10">
         <input type="text" class="form-control" id="inputStateProvinceRegion" name="state-province-region" placeholder="State / Province / Region">
       </div>
     </div>

     <div class="form-group">
       <p></p>
       <label for="inputZipPostalCode" class="col-sm-2 control-label">Zip / Postal Code</label>
       <div class="col-sm-10">
         <input type="number" class="form-control" id="inputZipPostalCode" name="zip-postal-code" placeholder="Zip / Postal Code">
       </div>
     </div>


     <div class="form-group">
       <p></p>
       <label for="selectCountry" class="col-sm-2 control-label">Country</label>
       <div class="col-sm-10">
         <select class="form-control" id="selectCountry" name="country">
           <option value="" selected="selected">(please select a country)</option>
            </option>
           <option value="HN">india</option>



         </select>
       </div>
     </div>

      <input type="submit"  class="form-control"  name=" save" placeholder=" ">
   </form>









 </div>
</div>
</div>
<script type="text/javascript" src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js">
</script>
  </body>
</html>
