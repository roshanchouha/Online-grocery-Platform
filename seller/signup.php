
<!DOCTYPE html>
<html lang="en">
<head>
   <title>sign-up page</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
 <style media="screen">
   a {
    text-decoration: none;
       }
  .login-page {
    width: 100%;
    height: 100vh;
    display: inline-block;
    display: flex;
    align-items: center;
   }
   #box{
      border: 2px solid white;
      height:  100%;
      background: url(greenback.jpg);
      background-position: center;
      background-size: cover;
   }
.form-right i {
    font-size: 100px;
     }
 </style>

</head>
<body>

   <div class="login-page bg-light">
       <div class="container">
           <div class="row">
               <div class="col-lg-10 offset-lg-1">
                 <h3 class="mb-3"> Saler Login Page</h3>
                   <div class="bg-white shadow rounded">
                       <div class="row">
                           <div class="col-md-7 pe-0">
                               <div class="form-left h-100 py-5 px-5">
                                   <form action="savesignup.php" class="row g-4" method="post">

                                     <div class="col-12">
                                         <label>fname<span class="text-danger">*</span></label>
                                         <div class="input-group">
                                             <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                             <input type="text" class="form-control"  name="fname" placeholder="Enter fname">
                                         </div>
                                     </div>

                                     <div class="col-12">
                                         <label>lname<span class="text-danger">*</span></label>
                                         <div class="input-group">
                                             <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                             <input type="text" class="form-control"  name="lname" placeholder="Enter lname">
                                         </div>
                                     </div>


                                           <div class="col-12">
                                               <label>Username<span class="text-danger">*</span></label>
                                               <div class="input-group">
                                                   <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                                   <input type="text" class="form-control"  name="uname" placeholder="Enter Username">
                                               </div>
                                           </div>
                                           <div class="col-12">
                                               <label>Mobile Number<span class="text-danger">*</span></label>
                                               <div class="input-group">
                                                   <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                                   <input type="text" class="form-control" name="mobile" placeholder="mobile number">
                                               </div>
                                           </div>

                                           <div class="col-12">
                                               <label>email<span class="text-danger">*</span></label>
                                               <div class="input-group">
                                                   <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                                                   <input type="email" name="email" class="form-control" placeholder="Enter email">
                                               </div>
                                           </div>

                                           <div class="col-12">
                                               <label>Password<span class="text-danger">*</span></label>
                                               <div class="input-group">
                                                   <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                                                   <input type="password" name="password" class="form-control" placeholder="Enter Password">
                                               </div>
                                           </div>


                                           <div class="col-sm-6">

                                           </div>

                                           <div class="col-12">
                                               <button type="submit" class="btn btn-primary px-4 float-end mt-4" name="save">Sign-Up</button>

                                           </div>
                                   </form>
                               </div>
                           </div>
                           <div class="box col-md-5 ps-0 d-none d-md-block">
                               <div  id="box"  >
                                   <i></i>
                                   <h2></h2>
                               </div>
                           </div>
                       </div>
                   </div>

               </div>
           </div>
       </div>
   </div>

   <!-- Bootstrap JS -->

</body>
</html>
