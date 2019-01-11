<<<<<<< HEAD
<?php 
session_start();
if($_GET['q']==1){//neu q=1 la logout admin
  if(isset($_SESSION['admin'])){
	unset($_SESSION['admin']);
	  setcookie("cookie_admin", "", time() - 3600, '/');
	header("location:dangnhap.php");
  } 
return;
}


if(isset($_SESSION["start"])){
	unset($_SESSION['start']);
	setcookie("cookie_dangnhap", "", time() - 3600, '/');
	header("location:dangnhap.php");
}
else
header("location:dangnhap.php");
 ?>
=======
<?php 
session_start();
if($_GET['q']==1){//neu q=1 la logout admin
  if(isset($_SESSION['admin'])){
	unset($_SESSION['admin']);
	  setcookie("cookie_admin", "", time() - 3600, '/');
	header("location:dangnhap.php");
  } 
return;
}


if(isset($_SESSION["start"])){
	unset($_SESSION['start']);
	setcookie("cookie_dangnhap", "", time() - 3600, '/');
	header("location:dangnhap.php");
}
else
header("location:dangnhap.php");
 ?>
>>>>>>> 1332d43e1780d2a41f7374acb8f3aa9af08d9f33
