
 <?php
 session_start();
    if(isset($_POST['button']))
    {
      $catname=($_POST['categoryName']);
      $catdes=($_POST['categoryDescription']);
      include 'config.php';
       $sql = "SELECT categoryname FROM category WHERE categoryname= '{$catname}'";
      $result=mysqli_query($conn,$sql) ;

      if(mysqli_num_rows($result)>0)
       {
         echo '<p style=" color:red; text-align:center;">  Already Exsits </p>';
       }
      else
      {
        $sql1="INSERT INTO category(categoryname,categorydescription,storeID) VALUES( '$catname','$catdes',{$_SESSION['SID']})";
        $result1=mysqli_query($conn,$sql1);
        header("Location: http://localhost/grocery%20store/seller/category.php");
      }
      mysqli_close($conn);
    }
  ?>
