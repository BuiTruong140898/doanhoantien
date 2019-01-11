<<<<<<< HEAD
<?php
      if(isset($_["p"]))
        $p=$_GET["p"];
        else
            $p="";
 
        switch ($p) {
            case 'dangnhap':
         // require "dangnhap.php";
                 header("location:dangnhap.php");
                # code...
                break;
            case 'dangky':
            
                 header("location:dangky.php");
                # code...
                break;
            default:

            header("location:homedangnhap.php");
                # code...
                break;
        }

    
       

=======
<?php
      if(isset($_["p"]))
        $p=$_GET["p"];
        else
            $p="";
 
        switch ($p) {
            case 'dangnhap':
         // require "dangnhap.php";
                 header("location:dangnhap.php");
                # code...
                break;
            case 'dangky':
            
                 header("location:dangky.php");
                # code...
                break;
            default:

            header("location:homedangnhap.php");
                # code...
                break;
        }

    
       

>>>>>>> 1332d43e1780d2a41f7374acb8f3aa9af08d9f33
     ?>