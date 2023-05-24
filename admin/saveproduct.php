<?php

    if(isset($_POST['button']))
    {

        if(isset($_FILES['img']))
        {
             $errors =  array();
             $FileName=$_FILES['img']['name'];
             $FileSize=$_FILES['img']['size'];
             $FileTmpName=$_FILES['img']['tmp_name'];
             $FileType=$_FILES['img']['type'];
             $FileExt= end(explode('.',$FileName));

             $extention = array("jpeg","jpg","png","jfif","webp");


             if(in_array($FileExt, $extention) === false)
             {
                $errors[]="This extention File not allowed";
             }

             if($FileSize>2097152)
             {
                $errors[]="File size must be less then 2mb";
             }

             if(empty($errors)==true)
             {
                move_uploaded_file($FileTmpName,"upload/".$FileName);

             }else
             {
                   print_r($errors);
                   die();
             }

        }



     $pname=$_POST['pname'];
     $unit=$_POST['unit'];
     $pic=$_POST['img'];
     $weight=$_POST['weight'];
     $CID=$_POST['category'];
     $price=$_POST['price'];
     $prodes=$_POST['prodes'];


    include 'config.php';
     echo   $sql = " INSERT INTO post(title,description,category,post_date,author,post_img) VALUES('{$post_title}','{$description}',{$category},'{$date}',{$Author},'{$FileName}');";

     $sql .= "UPDATE category SET post = post+1 WHERE category_id={$category}";


      if(mysqli_multi_query($conn,$sql))
      {
         header("Location: http://localhost/news-template/admin/post.php");
     }else{
        echo "Query failed";
     }
     mysqli_close($conn);
   }
  ?>
