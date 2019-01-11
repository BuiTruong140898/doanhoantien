<<<<<<< HEAD
<?php session_start() ?>

<?php

if(isset($_POST['email'])){
    $email=$_POST["email"];
    $matkhau=md5($_POST["password"]);
	
    require "mysql/conn.php";

    $sql="select * from nguoidung where email='".$email."'and matkhau='".$matkhau."'";

    $kiemtra=mysqli_query($con,$sql);
    
    if($row=mysqli_fetch_assoc($kiemtra)){
        
       if($row['quantri']==1){
        $_SESSION['admin']=$email;
        if(isset($_POST['remember-me']))
          
setcookie("cookie_admin", "$email", time() + 3600, '/');


    header("location:admin.php");
    return;
       }
       else{
       if(isset($_POST['remember-me']))
              
     setcookie("cookie_dangnhap", "$email", time() + 3600, '/');

       $_SESSION["start"]=$email;

      header("location:home.php");
      return;
      //header("location:dangky.php");
      }
    }
}

	header("location:homedangnhap.php");


 ?>

=======
<?php session_start() ?>

<?php

if(isset($_POST['email'])){
    $email=$_POST["email"];
    $matkhau=md5($_POST["password"]);
	
    require "mysql/conn.php";

    $sql="select * from nguoidung where email='".$email."'and matkhau='".$matkhau."'";

    $kiemtra=mysqli_query($con,$sql);
    
    if($row=mysqli_fetch_assoc($kiemtra)){
        
       if($row['quantri']==1){
        $_SESSION['admin']=$email;
        if(isset($_POST['remember-me']))
          
setcookie("cookie_admin", "$email", time() + 3600, '/');


    header("location:admin.php");
    return;
       }
       else{
       if(isset($_POST['remember-me']))
              
     setcookie("cookie_dangnhap", "$email", time() + 3600, '/');

       $_SESSION["start"]=$email;

      header("location:home.php");
      return;
      //header("location:dangky.php");
      }
    }
}

	header("location:homedangnhap.php");


 ?>

>>>>>>> 1332d43e1780d2a41f7374acb8f3aa9af08d9f33
